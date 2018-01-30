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

Route::get('planai', function (){
    $companies = App\Company::with('plans', 'plans.specs', 'plans.fees')->get();
  return $companies;
});