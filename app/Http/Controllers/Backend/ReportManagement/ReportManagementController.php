<?php

namespace App\Http\Controllers\Backend\ReportManagement;

use Illuminate\Http\Request;
use DB;
use Auth;
use DataTables;
use App\Models\Backend\Items;
use App\Models\Backend\ItemCategories;
use App\Models\Backend\Stocks;
use App\Models\Backend\ItemStatics;
use App\Http\Controllers\BackendController;

class ReportManagementController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "manajemen-laporan.";
    }

    public function getIndex()
    {
        return $this->makeView('index');
    }

    public function postSearch(Request $request)
    {
        // $category = $request->categoryReport;
        // $subCategory = $request->subCategory;

        // if($subCategory == "all"){
        //     $res = DB::table($category)->get();
        // }elseif($subCategory == "itemCategory"){
        //     $res = DB::table("item_categories")
        //             ->get();
        //     return $this->makeView('item-categories',[
        //         'res' => $res
        //     ]);
        // }elseif($subCategory == "joinThisMonth"){
        //     $res = DB::table("user")
        //             ->whereBetween('created_at', [$request->dFrom , $request->dTill])
        //             ->get();
        //     return  $this->makeView('user-join',[
        //         'res' => $res
        //     ]);
        // }
        // return $res;

        return back();
    }
}
