<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\HotelAdminController;
use App\Http\Middleware\HotelAdminMiddleware;
use App\Http\Middleware\PartnerMiddleware;
use Google\Auth\Middleware\AuthTokenMiddleware;

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


Route::group([
    'prefix' => 'hotel-admin',
    'middleware' => HotelAdminMiddleware::class
], function () {
    Route::view('signin', 'hotel-admin.signin-signup');
    Route::view('change-password', 'hotel-admin.change-password');
    Route::view('contacts', 'hotel-admin.contacts');
    Route::view('add-new-rate-plan-final', 'hotel-admin.add-new-rate-plan-final');
    Route::view('add-new-rate-plan', 'hotel-admin.add-new-rate-plan');
    Route::view('calendar', 'hotel-admin.calendar');
    Route::view('damage-deposit', 'hotel-admin.damage-deposit');
    Route::view('date-changes-non-refundable-booking', 'hotel-admin.date-changes-non-refundable-booking');
    Route::view('edit-room-details', 'hotel-admin.edit-room-details');
    //Route::view('facilities-services','hotel-admin.facilities-services');
    Route::view('financial-overview', 'hotel-admin.financial-overview');
    Route::view('general-info', 'hotel-admin.general-info');
    Route::view('get-time-squers', 'hotel-admin.get-time-squers');
    Route::view('guest-reviews', 'hotel-admin.guest-reviews');
    Route::view('invoices', 'hotel-admin.invoices');
    Route::view('obocas-messages', 'hotel-admin.obocas-messages');
    Route::view('photos', 'hotel-admin.photos');
    Route::view('policies', 'hotel-admin.policies');
    Route::view('property-page-score', 'hotel-admin.property-page-score');
    Route::view('reservation-messages', 'hotel-admin.reservation-messages');
    Route::view('reservation-statements', 'hotel-admin.reservation-statements');
    // Route::view('reservations','hotel-admin.reservations');
    Route::view('review-edit-reat-plan', 'hotel-admin.review-edit-reat-plan');
    Route::view('security', 'hotel-admin.security');
    Route::view('vat-tax-charges', 'hotel-admin.vat-tax-charges');

    Route::controller(HotelAdminController::class)->group(function () {
        Route::get('room-details', 'roomDetails');
        Route::get('notification-settings', 'notificationSettings');
        Route::post('notification-settings', 'storeNotificationSettings');
        Route::get('dashboard', 'home');
        Route::get('reservations', 'reservations');

        Route::view('add-room1', 'hotel-admin.rooms.add-room1');
        Route::post('add-room1', 'storeRoom1');
        Route::get('open-close-rooms', 'openCloseRooms');
        Route::post('open-close-rooms', 'storeOpenCloseRooms');

        Route::get('/how-to-get', 'howToGet');
        Route::post('/how-to-get', 'storeHowToGet');


        Route::get("what's-nearby", "nearBy");
        Route::post('/nearby', 'storeNearBy');

        Route::get('/facilities-services', 'facility');
        Route::post('/facility/add', 'storeFacility');

        Route::get('/facility/delete/{facility}', 'deleteFacility');

        Route::get('rate-plans', 'ratePlan');
        Route::post('rate-plans', 'storeRatePlan');

        Route::get('logout', 'logout');
    });
    Route::fallback(function () {
        if (auth()->user() && auth()->user()->role->name == "HotelAdmin") {
            return redirect('/hotel-admin/dashboard');
        } else {
            return redirect('/signup');
        }
    });
});
Route::group([
    'prefix' => 'partner',
    'controller' => PartnerController::class,
], function () {
    Route::get('signup', 'signup');
    Route::post('signup', 'store');
    Route::post('signin', 'signin');
    Route::view('index', 'partner.index');
    Route::redirect('/', '/partner/dashboard');
    Route::middleware(PartnerMiddleware::class)->group(function () {
        Route::get('home', 'home');
        Route::view('faq', 'partner.dashboard.faq');
        Route::get('dashboard', 'dashboard');
        Route::get('profile', 'profile');
        Route::get('report', 'report');
        Route::get('tools', 'tools');
        Route::post('profile', 'updateProfile');
    });
    Route::fallback(function () {
        if (auth()->user() && auth()->user()->role->name == "Partner") {
            return redirect('/partner/dashboard');
        } else {
            return redirect('/partner/signup');
        }
    });
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/', 'register');

    Route::get('/signin', 'signin');
    Route::post('/sign-otp', 'signOtp');
    Route::get('/verify-otp', 'verifyOtpView');
    Route::post('/verify-otp', 'verifyOtp');
    Route::view('/complete-profile', 'complete-profile');
    Route::post('/complete-profile', 'completeProfile');
    Route::post('/verify-pass', 'verifyPass');
});

Route::view('/signin1', 'public.signin');
Route::post('booking1', function () {
    return view('public.booking-step-one');
});
Route::view('booking2', 'public.booking-step-two');
Route::view('booking3', 'public.booking-step-three');
Route::view('confirm', 'public.confirm');
Route::view('search-result', 'public.searchresults');
Route::view('layout', 'public.layout');

Route::controller(PropertyController::class)->group(function () {
    Route::view('property1', 'public.create-property1');
    Route::view('property2', 'public.create-property2');
    Route::view('property3', 'public.create-property3');
    Route::view('property4', 'public.create-property4');
    Route::view('property5', 'public.create-property5');
    Route::view('property6', 'public.create-property6');
    Route::view('property7', 'public.create-property7');
    Route::view('property8', 'public.create-property8');
    Route::view('property9', 'public.create-property9');
    Route::view('property10', 'public.create-property10');


    Route::get('/', 'index');

    Route::get('property1/{type}', 'property1');
    Route::get('property2/{numberOfHotels}', 'property2');
    Route::post('property3', 'property3');
    Route::post('property4', 'property4');
    Route::post('property5', 'property5');
    Route::post('property6', 'property6');
    Route::post('property7', 'property7');
    Route::post('property8', 'property8');
    Route::post('property9', 'property9');
    Route::post('property10', 'property10');

    Route::get('property/{property}', 'show');
    Route::get('p/{property}', 'show1');
    // Route::post('search', 'search');
    Route::get('search', 'search');
});

Route::controller(BookingController::class)->group(function () {
    Route::get('booking2', 'booking2');
    Route::post('booking2', 'storeBooking2');
    Route::get('booking3', 'booking3');
    Route::post('booking3', 'storeBooking3');
    Route::get('booking-confirm', 'confirm');
});
Route::prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index');
        Route::get('hotels', 'hotels');
        Route::get('bookings', 'bookings');
        Route::get('images/add', 'addImage');
        Route::post('images/add', 'storeImage');
        Route::get('images', 'images');
        Route::get('images/delete/{carousalImage}', 'destroyImage');
    });
});
Route::get('firebase', [FirebaseController::class, 'index']);
Route::get('fauth', [FirebaseController::class, 'auth']);
Route::get('/coupon/{coupon_code}', function ($coupon_code) {
    session(['coupon' => $coupon_code]);
    return redirect('/');
});
