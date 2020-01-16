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
    $Product =  Product::orderBy('created_at','desc')->get();

    //    Product::all();
    //    $Gallery = Gallery::all();

       // $Category = Category::all()->orderBy('sorting','desc')->get();
     // $Category = Category::all();

      $Category = DB::table('Categories')
                ->orderBy('sorting', 'asc')
                ->get();
    //    $Features = Features::where('type','feature')
    //    ->orderBy('id','desc')
    //    ->limit(4)->get();

        // $services = Features::where('type','service')
        //             ->orderBy('id','desc')
        //             ->limit(6)->get();

    //  $data['settings']= $settings;
     $data['Product']= $Product;
    //  $data['Features']= $Features;
    //  $data['services']= $services;
     $data['Category']= $Category;
    //  $data['Gallery']= $Gallery;

// dd($data);

        return view('Medico', compact('data'));
    }


    // public function readMore($id, $title)
    // {
    //   dd($id , $title);
    // }
}
