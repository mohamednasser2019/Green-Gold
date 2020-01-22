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
<<<<<<< HEAD
    //    $settings = configration::find(1);
    $Product =  Product::select()
    ->orderby('created_at','desc')->get();

      $Category = DB::table('Categories')
                ->orderBy('sorting', 'asc')
                ->get();

        

     $data['Product']= $Product;
     $data['Category']= $Category;


    //  $prod['Product']=$Prod;
=======
        $Product = Product::orderBy('created_at', 'desc')->get();
        $Category = DB::table('categories')
            ->orderBy('sorting', 'asc')
            ->get();
        $data['Product'] = $Product;
        $data['Category'] = $Category;
>>>>>>> f2e3cf57708fe38b1cc2589160fbdc3023ca1e5f

        return view('Medico', compact('data'));
    }


}
