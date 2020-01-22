<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\configration;
// use App\Features;
use App\Product;
// use App\Gallery;
use App\Category;

//builder
use DB;


class HomeController extends Controller
{


    public function __construct()
    {
    }


    public function index()
    {
        $Product = Product::orderBy('created_at', 'desc')->get();
        $Category = DB::table('categories')
            ->orderBy('sorting', 'asc')
            ->get();
        $data['Product'] = $Product;
        $data['Category'] = $Category;

        return view('Medico', compact('data'));
    }


}
