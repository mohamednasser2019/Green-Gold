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
        $this->middleware('auth');
        $this->objectName = $model;
        $this->folderView = 'admin.products.';
        $this->flash = 'Product Data Has Been ';

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->objectName::with('getCategory')->get();
        // dd($data);
        return view($this->folderView.'index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$categories = Category::pluck('category_name','id');

        return view($this->folderView.'create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required|string',
            'product_img' => 'required',
            'benefits_of_use' => 'required|string',
            'usage_rates' => 'required|string',
            'aboutProduct' => 'required|string',
            'packaging' => 'required|string',
        ]);

        $input = $request->all();

        if($request['product_img'] != null)
        {
	        // This is Image Information ...
			$file	 = $request->file('product_img');
            $name    = $file->getClientOriginalName();
			$ext 	 = $file->getClientOriginalExtension();
			$size 	 = $file->getSize();
			$path 	 = $file->getRealPath();
			$mime 	 = $file->getMimeType();

			// Move Image To Folder ..
			$fileNewName = 'img_'.time().'.'.$ext;
			$file->move(public_path('uploads/Products_Images'), $fileNewName);

	        $input = $request->all();
	        $input['product_img'] = $fileNewName;
	    }
	    else
        {
            $input = $request->all();
            $input['product_img'] = 'empty.jpg';
        }

        // $user = auth()->user();

        $input['created_by'] = auth()->user()->id;

        $this->objectName::create($input);


        return redirect()->route('products.index')->with('success',$this->flash.' Created');

    }


    public function show($id)
    {
        $data = $this->objectName::with('getCategory')->find($id);

        return view($this->folderView.'show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->objectName::find($id);
        $categories = Category::pluck('category_name','id');

        return view($this->folderView.'edit', compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
            'category_id' => 'required',
            'product_name' => 'required|string',
            'benefits_of_use' => 'required|string',
            'usage_rates' => 'required|string',
            'aboutProduct' => 'required|string',
        ]);

        $input = $request->all();
      if($request['product_img'] != null)
        {
            // This is Image Information ...
            $file    = $request->file('product_img');
            $name    = $file->getClientOriginalName();
            $ext     = $file->getClientOriginalExtension();
            $size    = $file->getSize();
            $path    = $file->getRealPath();
            $mime    = $file->getMimeType();

            // Move Image To Folder ..
            $fileNewName = 'img_'.time().'.'.$ext;
            $file->move(public_path('uploads/Products_Images'), $fileNewName);

            $input = $request->all();
            $input['product_img'] = $fileNewName;

        }else
        {
            unset($input['product_img']);
        }



        $this->objectName::find($id)->update($input);


       return redirect()->route('products.index')->with('success',$this->flash.' updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chcek = $this->objectName::findOrFail($id);
        if ($chcek)
        {
            $this->objectName::find($id)->delete();

            return redirect()->back()->with('success', $this->flash);
        }
        else
        {
            return redirect()->back()->with('danger', 'Not Found ID !!');
        }
    }
}
