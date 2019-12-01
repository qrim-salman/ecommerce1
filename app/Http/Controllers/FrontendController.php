<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	protected $view;

	public function __construct()
	{
		$this->view = "frontend.";
	}

	public function makeView($view, $data = [])
	{
		return view($this->view . $view, $data);
	}
}
