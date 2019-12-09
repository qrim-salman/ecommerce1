<?php

namespace App\Http\Controllers\Backend\ReportManagement;

use Illuminate\Http\Request;
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
}
