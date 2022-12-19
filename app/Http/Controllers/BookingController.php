<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function booking2()
    {
        $bookingPropertyId = session('booking_property_id');
        $property = Property::find($bookingPropertyId);
        return view('public.booking-step-two')
            ->with('property', $property);
    }
    public function storeBooking2(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['booking_' . $key => $value]);
        }
        Log::channel('debug')->info('booking2');
        Log::channel('debug')->info(session()->all());
        return redirect('/booking3');
    }
    public function booking3()
    {
        return view('public.booking-step-three')
            ->with('property', Property::find(session('booking_property_id')));
    }
    public function storeBooking3(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['booking_' . $key => $value]);
        }
        Log::channel('debug')->info(session()->all());
        $data = [];
        $sessionAllData = session()->all();
        foreach ($sessionAllData as $key => $value) {
            if (substr($key, 0, 8) == "booking_") {
                $data[substr($key, 8)] = $value;
            }
        }
        unset($data['confirm_email']);
        unset($data['special_requests']);
        unset($data['book']);
        // Booking::create($data);
        $booking = new Booking();
        $booking->fill($data);
        $booking->partner_id = session('coupon');
        $booking->save();
        return redirect('/booking-confirm');
    }
    public function confirm()
    {

        return view('public.confirm')
            ->with('property', Property::find(session('booking_property_id')));
    }
}
