<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	protected $view;

	public function __construct()
	{
		view()->share("__two_first_categories", $this->twoFirstCategories());
		view()->share("__all_categories", $this->allCategories());
		$this->view = "frontend.";
	}

	public function makeView($view, $data = [])
	{
		return view($this->view . $view, $data);
	}

	public function twoFirstCategories()
	{
		return \DB::table('item_categories')
						->select('name', 'slug')
						->limit(2)
						->get()
						->toArray();
	}

	public function allCategories()
	{
		$data = $this->twoFirstCategories();
		return  \DB::table('item_categories')
					->select('name', 'slug')
					->whereNotIn('name', [$data[0]->name, $data[1]->name])
					->get();
	}
}
