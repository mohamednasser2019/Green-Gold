<?php




//main Rote
Route::get('/','HomeController@index');
// Route::get('read_more/{id}/{text}','HomeController@readMore');

Route::get('product/{id}','ProductWebsiteController@show');




Route::group(['prefix' => 'admin'], function ()
{

    Auth::routes();
    

    Route::get('home', 'Admin\HomeController@home');

    Route::get('sendMail', 'Admin\mailController@sendMail');

    // This is For users CRUD ..
    Route::resource('users', 'Admin\usersController');
    Route::get('users/{id}/delete', 'Admin\usersController@destroy');

  // This is For Categories CRUD ..
    Route::resource('categories', 'Admin\CategoriesController');
    Route::get('categories/{id}/delete', 'Admin\CategoriesController@destroy');
    Route::get('categories/{id}/edit', 'Admin\CategoriesController@edit');

  // This is For Members CRUD ..
    Route::resource('products', 'Admin\ProductController');
    Route::get('products/{id}/delete', 'Admin\ProductController@destroy');
    Route::get('products/{id}/edit', 'Admin\ProductController@edit');

     Route::get('products/{id}/status', 'Admin\ProductController@status');

    Route::resource('events', 'Admin\EventControler');
    Route::get('events/{id}/delete', 'Admin\EventControler@destroy');
    Route::get('events/{id}/edit', 'Admin\EventControler@edit');  

    



  // This is For configrations CRUD ..
    Route::get('configrations', 'Admin\configrationsController@viewForm')->name('configrations');
    Route::put('configrations/update', 'Admin\configrationsController@update')->name('configrations/update');

}

);







