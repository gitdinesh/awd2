<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return "This is GET Method";
});


/**
 * Dirty Way 
 */
/*Route::get('/items', function () {
   // $items =[]
   // $items = ""
   // $items = 0
    return view('items.index');
});*/

Route::get('/test','TestController@index');
Route::get('/test2','TestController@test2');
Route::get('/cal/add/{num1}/{num2}','CalculatorController@add');
Route::get('/cal/sub/{num1}/{num2}','CalculatorController@substract');



Route::get('/items','ItemsController@index');
Route::get('/item/{id}','ItemsController@show');
