<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use Validator;
use Auth;

// use App\Http\Resources\FeatureResource;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public $objectName;

    public function __construct(Product $model)
    {
        // $this->middleware('auth:api');
        $this->objectName = $model;
    }


    public function sendResponse($status, $data = null)
    {
        if ($status == 401) {
            return response(
                [
                    'status' => 401,
                    'errors' => $data
                ]
            );
        } else {
            return response(
                [
                    'status' => 200,
                    'data' => $data
                ]
            );
        }
    }

    public function errorsMessages($errArray)
    {
        $valArr = array();
        foreach ($errArray->toArray() as $key => $value) {
            $errStr = $value[0];
            array_push($valArr, $errStr);
        }

        return $valArr;
    }


    public function makeValidate($inputs, $rules)
    {

        $validator = Validator::make($inputs, $rules);
        if ($validator->fails()) {
            return $this->errorsMessages($validator->messages());
        } else {
            return true;
        }
    }

    public function index()
    {
        $data = Product::all('id', 'product_name', 'product_img');

         return $this->sendResponse(200, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $validate = $this->makeValidate($request->all(), ['products_id' => 'required']);

        if (!is_array($validate)) {
            $id = $request->input('products_id');
            // $data = Product::findOrFail(intval($id));
            $data = Product::where('id', $id)->first();

            return $this->sendResponse(200, $data);
        } else {
            return $this->sendResponse(401, $validate);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function getProductbyCategory(Request $request)
    {
        $validate = $this->makeValidate($request->all(), ['category_id' => 'required']);

        if (!is_array($validate)) {
            $category_id = $request->input('category_id');
            // $id = $request->input('id');

            // $data = Product::findOrFail(intval($id));
            $data = Product::select(array('id', 'product_name', 'product_img'))
                ->where('category_id', $category_id)->get();

            return $this->sendResponse(200, $data);
        } else {
            return $this->sendResponse(401, $validate);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
