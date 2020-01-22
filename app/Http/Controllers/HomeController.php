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
    //    $settings = configration::find(1);
    $Product =  Product::select()
    ->orderby('created_at','desc')->get();

      $Category = DB::table('Categories')
                ->orderBy('sorting', 'asc')
                ->get();

        

     $data['Product']= $Product;
     $data['Category']= $Category;


    //  $prod['Product']=$Prod;

        return view('Medico', compact('data'));
    }
    

}
