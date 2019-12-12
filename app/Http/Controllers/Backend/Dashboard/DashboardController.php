<?php

namespace App\Http\Controllers\Backend\Dashboard;

use DB;
use Illuminate\Http\Request;
use App\user;
use App\Models\Backend\Items;
use App\Models\Backend\Stocks;
use Carbon\Carbon;
use App\Http\Controllers\BackendController;

class DashboardController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "dashboard.";
    }

    public function getIndex()
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->year;
        $monthchart = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
        $datachart  = array(1, 2, 3, 4, 5, 8, 9, 4,12,4,22,1);

        return $this->makeView("index",[
        'users' => DB::table('users')
                    ->get(),
        'usersMonth' => DB::table('users')
                        ->whereMonth("created_at", $month)
                        ->get(),
        'usersYear' => DB::table('users')
                        ->whereYear("created_at", $year)
                        ->get(),
        'items' =>  items::all(),
        'itemsMonth' => items::whereMonth('created_at', $month)->get(), 
        'stocksMonth' => stocks::whereMonth('created_at', $month)->sum('qty'),
        'Months' => $monthchart,
        'Data' => $datachart
        ]);
    }
    
}
