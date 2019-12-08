<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Backend\Items;
use App\Models\Backend\Stocks;
use App\Mpdels\Backend\itmeStatics;
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
                     ->select('items.name', 'items.price', 'items.rates', 'item_statics.resize_name')
                     ->join('item_statics', 'item_statics.item_id', '=', 'items.id')
                     ->where('status', true)
                     ->orderBy('items.created_at', 'DESC')
                     ->limit(12)
                     ->get();
        
        $rates = DB::table('Items')
                     ->select('items.name', 'items.price', 'items.rates', 'item_statics.resize_name')
                     ->join('item_statics', 'item_statics.item_id', '=', 'items.id')
                     ->where('status', true)
                     ->where('rates', '>=' ,'4.5')
                     ->limit(12)
                     ->get();

        $favorite =DB::table('Items')
                    ->select('items.name', 'items.price', 'items.rates', 'item_statics.resize_name', 'stocks.created_at')
                    ->join('stocks', 'stocks.item_id', '=', 'items.id')
                    ->join('item_statics', 'item_statics.item_id', '=', 'items.id')
                    // ->where('status', true)
                    ->orderBy('stocks.created_at', 'DESC')
                    ->limit(6)
                    ->get();

        $cheapest = DB::table('Items')
                       ->select('items.name', 'items.price', 'items.rates', 'item_statics.resize_name')
                       ->join('item_statics', 'item_statics.item_id', '=', 'items.id')
                       ->where('status', true)
                       ->orderBy('price', 'ASC')
                       ->limit(12)
                       ->get();

        return $this->makeView('home', [
          'newest' => $newest,
          'rates' => $rates,
          'favorite' => $favorite,
          'cheapest' => $cheapest
        ]);
    }
    
}
