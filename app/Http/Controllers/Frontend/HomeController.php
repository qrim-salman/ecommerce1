<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontendController;

class HomeController extends FrontendController
{
    public function __construct()
    {
    	parent::__construct();
    }

    public function getIndex()
    {
    	return $this->makeVIew("home");
    }
}
