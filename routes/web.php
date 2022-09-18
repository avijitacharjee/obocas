<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;

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

Route::post('/',[AuthController::class,'register']);

Route::view('/signin','public.signin');
Route::post('booking1',function(){
    return view('public.booking-step-one');
});
Route::view('booking2','public.booking-step-two');
Route::view('booking3','public.booking-step-three');
Route::view('confirm','public.confirm');
Route::view('search-result','public.searchresults');
Route::view('layout','public.layout');

Route::controller(PropertyController::class)->group(function(){
    Route::view('property1','public.create-property1');
    Route::view('property2','public.create-property2');
    Route::view('property3','public.create-property3');
    Route::view('property4','public.create-property4');
    Route::view('property5','public.create-property5');
    Route::view('property6','public.create-property6');
    Route::view('property7','public.create-property7');
    Route::view('property8','public.create-property8');
    Route::view('property9','public.create-property9');
    Route::view('property10','public.create-property10');

    Route::get('property1/{type}','property1');
    Route::get('property2/{numberOfHotels}','property2');
    Route::post('property3','property3');
    Route::post('property4','property4');
    Route::post('property5','property5');
    Route::post('property6','property6');
    Route::post('property7','property7');
    Route::post('property8','property8');
});
