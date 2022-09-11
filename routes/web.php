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

Route::get('log-test', function () {
    $message = "Avijit";
    Log::channel('debug')->info($message);
    return view('welcome');
});

Route::get('/',function(){
    return view('public.index');
});
Route::view('/signin','public.signin');
Route::post('booking1',function(){
    return view('public.booking-step-one');
});
Route::view('booking2','public.booking-step-two');
Route::view('booking3','public.booking-step-three');
Route::view('confirm','public.confirm');
Route::view('search-result','public.searchresults');
Route::view('layout','public.layout');
