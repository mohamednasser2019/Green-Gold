<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'Api\UserAuthController@login');

// Route::get('product', 'Api\ProductApiController@index');
Route::post('getProductService', 'Api\ProductApiController@show');


Route::get('getCategoriesService', 'Api\CategoryApiController@index');


