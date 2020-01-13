<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\User;

class ProductController extends Controller
{
    public $objectName;
    public $folderView;
    public $flash;


    public function __construct(Product $model)
    {
        $this->objectName = $model;
        $this->folderView = 'productView';
        $this->flash = ' ';

    }


 

 

    public function show($id)
    {
        $data = $this->objectName::with('getCategory')->find($id);

        

        return view($this->folderView, compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
