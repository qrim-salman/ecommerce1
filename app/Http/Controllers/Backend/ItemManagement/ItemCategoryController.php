<?php

namespace App\Http\Controllers\Backend\ItemManagement;

use App\Models\Backend\ItemCategories;
use Illuminate\Http\Request;
use App\Http\Requests\ItemCategoryRequest;
use App\Http\Controllers\BackendController;
use DataTables;

class ItemCategoryController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "manajemen-barang.kategori.";
    }

    public function getIndex()
    {
    	return $this->makeView("index");
    }

    public function getCategory(Request $request)
    {
    	if ($request->ajax()) {
    		$dataCategory = ItemCategories::latest()->get();
    		return DataTables::of($dataCategory)
    				->addIndexColumn()
    				->addColumn('action', function($row) {
    					$btnEdit = '<a href="'.route('category.edit', $row->id).'" class="edit btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="mdi mdi-pencil"></i></a>';

                        $btnDelete = '<a href="" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="mdi mdi-delete"></i></a>';

    					return $btnEdit."&nbsp;".$btnDelete;
    				})
    				->rawColumns(['action'])
    				->make(true);
    	}

    	return $this->makeView("index");
    }

    public function getCreate()
    {
    	return $this->makeView("create");
    }

    public function postCreate(ItemCategoryRequest $request)
    {
    	$result = ItemCategories::create($request->all());
    	return redirect()->route('category')->with('success', 'Kategori barang berhasil ditambahakan');	
    }

    public function getEdit($id)
    {
    	$data = ItemCategories::findOrFail($id);
    	return $this->makeView("edit", [
    		'category' => $data
    	]);
    }

    public function postEdit(ItemCategoryRequest $request, $id)
    {
    	$data = ItemCategories::findOrFail($id);
    	$data->update($request->all());

		return redirect()->route('category')->with('success', 'Kategori barang berhasil diubah');    	
    }

    public function getDelete(Request $request)
    {   
        if ($request->ajax()) {
            $data = ItemCategories::findOrFail($request->id);
            $result = $data->delete();

            if ($result == 1) {
                $status = true;
                $message = "Data berhasil dihapus";
            } else {
                $status = false;
                $message = "Data gagal dihapus";
            }

            return response()->json([
                'status' => $status,
                'message' => $message
            ]);
        } 
    }
}
