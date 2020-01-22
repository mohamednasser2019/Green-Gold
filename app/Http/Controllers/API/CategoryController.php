<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use Validator;
use Auth;
use App\Http\Resources\FeatureResource;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $objectName;

    public function __construct(Category $model)
    {
        // $this->middleware('auth:api');
        $this->objectName = $model;
    }



	public function sendResponse($status, $data = null)
	{
		if ($status == 401)
		{
			return response(
				[
					'status' => 401,
					'errors' => $data
				]
			);
		}
		else
		{
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
        $data =Category::all('id','category_name','category_img');

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
