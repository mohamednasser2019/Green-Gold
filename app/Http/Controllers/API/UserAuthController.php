<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Auth;

class UserAuthController extends Controller
{
    //
    public $objectName;


        public function __construct(User $model){
            $this->objectName = $model;

        }


        public function sendResponse($status, $data = null)
        {
            if ($status == false)
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
    
        public function validationErrorsToString($errArray)
        {
            $valArr = array();
            foreach ($errArray->toArray() as $key => $value) { 
             // dd($key, $value);
                $errStr = $value[0];
                // return $errStr;
                // dd($errStr);
                array_push($valArr, $errStr);
            }
            // dd($valArr);
            // if(!empty($valArr)){
            //     $errStrFinal = implode(',', $valArr);
            // }
            return $valArr;
        }





        public function login(Request $request)
	{
		$rules = [
			'email'=>'required',
			'password'=>'required',
		];
		$validator = Validator::make($request->all(),$rules);
		if($validator->fails())
		{
			return $this->sendResponse(false, $this->validationErrorsToString($validator->messages()));
		}
		else
		{

			if(Auth::attempt([
			'email'=>$request->input('email'),
			'password'=>$request->input('password')
			]))
			{
				$user = auth()->user();

				$user->api_token = str_random(60);
				$api_token = $user->api_token;
				$user->save();

				return $this->sendResponse(true, $user);  
			}
			else
			{
				return $this->sendResponse(false, 'Email or password is not valid !');
			}
		}
	}











}
