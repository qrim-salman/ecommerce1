<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

class ProductController extends FrontendController
{
    public function __construct()
    {
    	parent::__construct();

    	$this->view .= "produk."; 
    }

    public function getIndex()
    {

    }

    public function getDetail()
    {
    	
    }
}
