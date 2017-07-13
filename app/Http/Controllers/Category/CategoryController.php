<?php

namespace App\Http\Conrollers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	/**
	*/
	public function __construct()
	{

	}

	public function search()
	{
		return view('category.search');
	}
}
