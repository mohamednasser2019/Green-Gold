<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\User;
use App\Product;
use DB;
class HomeController extends Controller
{
   
    public $objectName;
	public function __construct()
	{
		 $this->middleware('auth');


	}



	public function home()
	{

        $category = Category::all();
        $user = User::all();
        $product = Product::all();

        $data['category'] = $category;
        $data['user'] = $user;
        $data['product'] = $product;

		return view('admin.index',compact('data'));
	}




}
