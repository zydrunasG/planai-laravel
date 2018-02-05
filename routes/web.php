<?php

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



Route::get('/', 'PlanController@index')->name('home');
Route::get('/create', 'PlanController@create');
Route::post('/create', 'PlanController@store');

Route::get('/company/create', 'CompanyController@create');
Route::post('/company/create', 'CompanyController@store');


Route::get('/search', 'SearchController@create');
Route::post('/search', 'SearchController@index');

Route::get('/planai', function (){
    $plans =  \App\Company::with('plans', 'plans.specs', 'plans.fees')->get();
    return $plans;
});

