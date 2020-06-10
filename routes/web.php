<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/create/company', 'CompanyController@index');
    Route::get('/create/employee', 'EmployeeController@index');
    Route::post('/create/company', 'CompanyController@store');
    Route::post('/create/employee', 'EmployeeController@store');
    Route::get('/edit/{id}', 'EmployeeController@edit');
    Route::put('/edit/{id}', 'EmployeeController@update');
    Route::delete('/delete/{id}', 'EmployeeController@destroy');
});