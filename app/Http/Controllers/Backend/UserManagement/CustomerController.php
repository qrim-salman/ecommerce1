<?php

namespace App\Http\Controllers\Backend\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\BackendController;

class CustomerController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "manajemen-user.customer.";
    }
}
