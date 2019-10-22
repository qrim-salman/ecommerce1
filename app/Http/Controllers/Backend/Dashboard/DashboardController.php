<?php

namespace App\Http\Controllers\Backend\Dashboard;

use Illuminate\Http\Request;
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
    	return $this->makeView("index");
    }
}
