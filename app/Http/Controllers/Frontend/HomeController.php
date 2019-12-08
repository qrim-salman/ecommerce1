<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Backend\Items;
use App\Models\Backend\Stocks;
use App\Models\Backend\ItemCategories;
use App\Http\Controllers\FrontendController;

class HomeController extends FrontendController
{
    public function __construct()
    {
    	parent::__construct();
    }

    public function getIndex()
    {   
        $newest = DB::table('Items')
                     ->select('name', 'price')
                     ->where('status', true)
                     ->orderBy('created_at', 'DESC')
                     ->limit(12)
                     ->get();
        
        $rates = DB::table('Items')
                     ->select('name', 'price')
                     ->where('status', true)
                     ->where('rates', '>=' ,'4.5')
                     ->limit(12)
                     ->get();

        $favorite = DB::table('Items')
                       ->select('items.name', 'items.price')
                       ->join('Stocks', 'Stocks.id', '=' ,'items.id')
                       ->where('status', true)
                       ->orderBy('Stocks.created_at', 'DESC')
                       ->limit(12)
                       ->get();

        // $cheapest = DB::table('Items')
        //                ->select('name', 'price')
        //                ->where('status', true)
        //                ->orderBy('price', 'ASC')
        //                ->limit(12)
        //                ->get();

        return $this->makeView('home', [
          'newest' => $newest,
          'rates' => $rates,
          'favorite' => $favorite
        ]); 
    }
    
}
