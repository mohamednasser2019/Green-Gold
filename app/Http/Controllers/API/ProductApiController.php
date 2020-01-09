<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Validator;
use DB;

class ProductApiController extends Controller
{

	  public $objectName;


    public function __construct(Product $model)
    {
        // $this->middleware('auth:api');
        $this->objectName = $model; 
    }

 public function sendResponse($status , $data= null )
    {if ($status == false)
		{
			return response(
				[
					'status' => false,
					'errors' => $data
				]
			);
		}
		else
		{
			return response(
				[
					'status' => true,
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

  public function makeValidate($inputs,$rules)
    {
    	
		$validator = Validator::make($inputs,$rules);
		if($validator->fails())
		{
			return $this->errorsMessages($validator->messages());
		}
		else
		{
			return true;
		}
    }


      public function index()
    {
        $data = Product::all();

        return $this->sendResponse(true,$data);

    }




    public function show(Request $request)
    {
        //
        $validate = $this->makeValidate($request->all(),['products_id'=>'required']);

		if (!is_array($validate))
		{
			$id = $request->input('products_id');
            // $data = Product::findOrFail(intval($id));
           $data=Product::select(array('id', 'aboutProduct', 'benefits_of_use', 'packaging', 'product_img',
             'product_name', 'usage_rates'))
           ->where('id',$id)->get();

			return $this->sendResponse(true, $data);
        }
		else
		{
			return $this->sendResponse(false, $validate);
		}


    }
}
