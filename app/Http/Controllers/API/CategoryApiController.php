<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Validator;

class CategoryApiController extends Controller
{
   	  public $objectName;


    public function __construct(Category $model)
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
        $data=Category::all('id', 'category_name', 'category_img');

        return $this->sendResponse(true,$data);

    }




}
