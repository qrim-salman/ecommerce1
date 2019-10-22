<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
	protected $view;

    public function __construct()
    {
    	$this->view = "backend.";
    }

    public function makeView($view, $data = [])
    {
    	return view($this->view . $view, $data);
    }
}
