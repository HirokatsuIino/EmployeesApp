<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('/employee_list', 'admin\ManageEmployeeController');
//Route::apiResource('/employee/{id}/{employee_id}', 'admin\ManageEmployeeDetailController');

//Route::get('/employee_list', 'admin\ManageEmployeeController@index');
Route::get('/employee_list', 'admin\ManageEmployeeController@index');
Route::post('/employee_create', 'admin\ManageEmployeeController@store');
Route::get('/employee/{id}', 'admin\ManageEmployeeDetailController@show');
