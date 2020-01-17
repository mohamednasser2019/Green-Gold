<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'API\UserAuthController@login');

Route::get('getCategoriesService', 'API\CategoryController@index');

Route::get('getProductService', 'API\productController@show');

Route::get('getProductsService', 'API\productController@getProductbyCategory');
Route::get('getAllProduct', 'API\productController@index');



