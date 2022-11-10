<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\HotelAdminController;

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


Route::prefix('hotel-admin')->group(function(){
    Route::view('signin','hotel-admin.signin-signup');
    Route::view('change-password','hotel-admin.change-password');
    Route::view('contacts','hotel-admin.contacts');
    Route::view('add-new-rate-plan-final','hotel-admin.add-new-rate-plan-final');
    Route::view('add-new-rate-plan','hotel-admin.add-new-rate-plan');
    Route::view('calendar','hotel-admin.calendar');
    Route::view('damage-deposit','hotel-admin.damage-deposit');
    Route::view('date-changes-non-refundable-booking','hotel-admin.date-changes-non-refundable-booking');
    Route::view('edit-room-details','hotel-admin.edit-room-details');
    Route::view('facilities-services','hotel-admin.facilities-services');
    Route::view('financial-overview','hotel-admin.financial-overview');
    Route::view('general-info','hotel-admin.general-info');
    Route::view('get-time-squers','hotel-admin.get-time-squers');
    Route::view('guest-reviews','hotel-admin.guest-reviews');
    Route::view('invoices','hotel-admin.invoices');
    Route::view('obocas-messages','hotel-admin.obocas-messages');
    Route::view('open-close-rooms','hotel-admin.open-close-rooms');
    Route::view('photos','hotel-admin.photos');
    Route::view('policies','hotel-admin.policies');
    Route::view('property-page-score','hotel-admin.property-page-score');
    Route::view('rate-plans','hotel-admin.rate-plans');
    Route::view('reservation-messages','hotel-admin.reservation-messages');
    Route::view('reservation-statements','hotel-admin.reservation-statements');
    // Route::view('reservations','hotel-admin.reservations');
    Route::view('review-edit-reat-plan','hotel-admin.review-edit-reat-plan');
    Route::view('room-details','hotel-admin.room-details');
    Route::view('security','hotel-admin.security');
    Route::view('vat-tax-changes','hotel-admin.vat-tax-changes');
    Route::view("what's-nearby","hotel-admin.what's-nrearby");

    Route::controller(HotelAdminController::class)->group(function(){
        Route::get('notification-settings','notificationSettings');
        Route::post('notification-settings','storeNotificationSettings');
        Route::get('dashboard','home');
        Route::get('reservations', 'reservations');
    });
});
Route::prefix('partner')->group(function (){
    Route::controller(PartnerController::class)->group(function (){
        Route::get('home', 'home');
        Route::get('signup', 'signup');
        Route::post('signup', 'store');
        Route::post('signin', 'signin');
        Route::view('faq', 'partner.dashboard.faq');
        Route::view('index', 'partner.index');
        Route::view('dashboard', 'partner.dashboard.dashboard');
        Route::view('profile', 'partner.dashboard.profile');
        Route::view('report', 'partner.dashboard.report');
        Route::view('tools', 'partner.dashboard.tools');
    });
});


Route::controller(AuthController::class)->group(function (){
    Route::post('/','register');
    Route::post('/sign-otp', 'signOtp');
    Route::get('/verify-otp', 'verifyOtpView');
    Route::post('/verify-otp','verifyOtp');
    Route::view('/complete-profile', 'complete-profile');
    Route::post('/complete-profile', 'completeProfile');
});

Route::view('/signin','public.sign-otp');
Route::view('/signin1','public.signin');
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


    Route::get('/','index');

    Route::get('property1/{type}','property1');
    Route::get('property2/{numberOfHotels}','property2');
    Route::post('property3','property3');
    Route::post('property4','property4');
    Route::post('property5','property5');
    Route::post('property6','property6');
    Route::post('property7','property7');
    Route::post('property8','property8');
    Route::post('property9','property9');
    Route::post('property10','property10');

    Route::get('property/{property}','show');
    // Route::post('search', 'search');
    Route::get('search', 'search');
});

Route::controller(BookingController::class)->group(function(){
    Route::get('booking2','booking2');
    Route::post('booking2','storeBooking2');
    Route::get('booking3','booking3');
    Route::post('booking3','storeBooking3');
    Route::get('booking-confirm','confirm');
});
Route::prefix('admin')->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('dashboard','index');
        Route::get('hotels','hotels');
        Route::get('bookings','bookings');
        Route::get('images/add', 'addImage');
        Route::post('images/add', 'storeImage');
        Route::get('images', 'images');
        Route::get('images/delete/{carousalImage}','destroyImage');
    });
});
Route::get('firebase',[FirebaseController::class,'index']);
Route::get('fauth', [FirebaseController::class , 'auth']);
