<?php

namespace App\Http\Controllers\Backend\ItemManagement;

use Auth;
use DataTables;
use DB, exception;
use App\Models\Backend\Items;
use App\Models\Backend\ItemCategories;
use App\Models\Backend\Stocks;
use App\Models\Backend\ItemStatics;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\StockRequest;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\BackendController;

class ItemManagementController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "manajemen-barang.";
        $this->photo_path = public_path('/images');
    }

    public function getIndex()
    {
    	return $this->makeView("index", [
    		"itemCategoryCount" => ItemCategories::latest()->get()->count(),
    	]);
    }

    public function getItem(Request $request)
    {
        if ($request->ajax()) {
            $dataItems = DB::table('items')
                        ->select('items.id', 'items.name', 'items.description', 'items.width', 'items.height', 'items.length', 'items.weight', 'items.status', 'items.price', 'item_categories.name as category')
                        ->join('item_categories', 'item_categories.id', '=', 'items.category_id')
                        ->get();
            return DataTables::of($dataItems)
                    ->addIndexColumn()
                    ->addColumn('action', function($row) {
                        $btnDetail = '<a href="'.route('item-management.detail', $row->id).'" class="detail btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="mdi mdi-format-list-bulleted"></i></a>';

                        $btnEdit = '<a href="'.route('item-management.edit', $row->id).'" class="edit btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="mdi mdi-pencil"></i></a>';

                        $btnDelete = '<a href="" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="mdi mdi-delete"></i></a>';

                        return $btnDetail."&nbsp;".$btnEdit."&nbsp;".$btnDelete;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return $this->makeView("index");
    }

    public function getCreate()
    {
        return $this->makeView("create", [
            "categories" => ItemCategories::latest()->get(),
        ]);
    }

    public function postCreate(ItemRequest $request)
    {
        try {
            $item = Items::create($request->all());
            $stock = Stocks::updateOrCreate([
                "item_id" => $item->id
            ], [
                "qty" => 0,
                "updated_by" => Auth::guard("admin")->user()->id,
            ]);

            return redirect()->route('item-management')->with('success', 'Data barang berhasil ditambahkan');
        } catch(\Exception $e) {
            return redirect()->route('item-management')->with('danger', $e->getMessage());
        }
    }

    public function getEdit($id)
    {
        $data = Items::findOrFail($id);
        return $this->makeView("edit", [
            "categories" => ItemCategories::latest()->get(),
            "model" => $data, 
        ]);
    }

    public function postEdit(ItemRequest $request, $id)
    {
        try {
            $data = Items::findOrFail($id);
            $data->update($request->all(), ["updated_by" => Auth::guard("admin")->user()->id]);

            return redirect()->route('item-management')->with('success', 'Data barang berhasil diubah');
        } catch(\Exception $e) {
            return redirect()->route('item-management')->with('danger', $e->getMessage());
        }
    }

    public function postDelete(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = Items::findOrFail($request->id);
                $result = $data->delete();

                if ($result == 1) {
                    $status = true;
                    $message = "Data berhasil dihapus.";
                } else {
                    $status = false;
                    $message = "Data gagal dihapus.";
                }

                return response()->json([
                    'status' => $status,
                    'message' => $message
                ]);        
            } catch(\Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => $e->getMessage()
                ]);
            }
        }
    }

    public function getDetail($id)
    {
        $data = Items::findOrFail($id);
        $stock = Stocks::where('item_id', $id)->get();
        $images = ItemStatics::where('item_id', $id)->get();

        $sumStock = 0;
        foreach ($stock as $value) {
            $sumStock += $value->qty;
        }

        return $this->makeView("detail", [
            "model" => $data,
            "stock" => $sumStock,
            "images" => $images,
        ]);
    }

    public function postStock(StockRequest $request, $itemId)
    {
        try {
            if ($request->qty == 0 || $request->qty <= (($request->stock + 1) * -1)) {
                return back()->with('danger', 'Jumlah stok yang diinput tidak valid');
            } else {
                $data = Stocks::create([
                    "item_id" => $itemId,
                    "qty" => $request->qty,
                    "updated_by" => Auth::guard("admin")->user()->id,                
                ]);

                $sumStock = 0;
                $status = false;

                $stock = Stocks::where('item_id', $itemId)->get();
                foreach ($stock as $value) {
                    if (!empty($value->id)) {
                        $sumStock += $value->qty;
                    }
                }

                if ($sumStock > 0) {
                    $status = true;
                } else {
                    $status = false;
                }   

                $item = Items::findOrFail($itemId);
                $item->update([
                    "status" => $status,
                ]);

                return back()->with('success', 'Data stok berhasil diperbarui');
            }

        } catch(\Exception $e) {
            return back()->with('danger', $e->getMessage());
        }
    }

    public function getImage($itemId)
    {
        return $this->makeView("upload", [
            "itemId" => $itemId
        ]);
    }

    public function postImage(Request $request, $itemId)
    {
        try {
            if ($request->hasFile("file")) {
                $photos = $request->file("file");

                if (!is_array($photos)) {
                    $photos = [$photos];
                }

                if (!is_dir($this->photo_path)) {
                    mkdir($this->photo_path, 0777);
                }

                for ($i = 0; $i < count($photos); $i++) { 
                    $photo = $photos[$i];
                    $name = sha1(date('YmdHis').str_random(30));
                    $saveName = $name.'.'.$photo->getClientOriginalExtension();
                    $resizeName = $name.str_random(2).'.'.$photo->getClientOriginalExtension();
                    $originalName = basename($photo->getClientOriginalName());

                    Image::make($photo)
                        ->resize(150, null, function($constraints) {$constraints->aspectRatio();})
                        ->save($this->photo_path.'/'.$resizeName);

                    $photo->move($this->photo_path, $saveName);

                    ItemStatics::updateOrCreate([
                        "item_id" => $itemId,
                        "original_name" => $originalName,
                    ],[
                        "save_name" => $saveName,
                        "resize_name" => $resizeName,
                    ]);
                }

                return response()->json([
                    "message" => "Gambar berhasil disimpan",
                ], 200);
            }
        } catch(\Exception $e) {
            return response()->json([
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    public function getDeleteImage($saveName)
    {
        try {
            $uploadedFile = ItemStatics::where('original_name', $saveName)->first();

            $filePath = $this->photo_path.'/'.$uploadedFile->save_name;
            $resizedFile = $this->photo_path.'/'.$uploadedFile->resize_name;

            if (file_exists($filePath)) {
                unlink($filePath);
            }

            if (file_exists($resizedFile)) {
                unlink($resizedFile);
            }

            if (!empty($uploadedFile)) {
                $uploadedFile->delete();
            }

            return back()->with('success', 'Gambar berhasil dihapus.');
        } catch(\Exception $e) {
            return back()->with('danger', $e->getMessage());
        }
    }

}
