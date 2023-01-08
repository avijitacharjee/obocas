<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DateTime;

class BookingController extends Controller
{
    public function booking2(Request $request)
    {
        $bookingPropertyId = session('booking_property_id');
        $property = Property::find($bookingPropertyId);

        $fromDate = new DateTime(explode(' - ', $request->dates)[0]);
        $toDate = new DateTime(explode(' - ', $request->dates)[1]);
        $numOfDays = $fromDate->diff($toDate)->days;
        // $fromDate->format();
        return view('public.booking-step-two')
            ->with('property', $property)
            ->with('fromDate', $fromDate)
            ->with('toDate', $toDate)
            ->with('numOfDays', $numOfDays);
    }
    public function storeBooking2(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['booking_' . $key => $value]);
        }
        Log::channel('debug')->info('booking2');
        Log::channel('debug')->info(session()->all());
        $data = [];
        $sessionAllData = session()->all();
        foreach ($sessionAllData as $key => $value) {
            if (substr($key, 0, 8) == "booking_") {
                $data[substr($key, 8)] = $value;
            }
        }
        $fromDate = new DateTime(explode(' - ', $request->dates)[0]);
        $toDate = new DateTime(explode(' - ', $request->dates)[1]);
        $numOfDays = $fromDate->diff($toDate)->days;
        $data['from_date'] = $fromDate->format("Y-m-d");
        $data['to_date'] = $toDate->format("Y-m-d");
        $data['number_of_persons'] = $request->number_of_persons;
        unset($data['dates']);
        unset($data['confirm_email']);
        unset($data['special_requests']);
        unset($data['book']);
        // Booking::create($data);
        $booking = new Booking();
        $booking->fill($data);
        if(session('coupon')){
            $coupon = session('coupon');
            $partner_id = (int) filter_var($coupon, FILTER_SANITIZE_NUMBER_INT);
            $booking->partner_id = $partner_id;
        }
        $booking->save();
        session(['booking_id'=> $booking->id]);
        return redirect('/booking-confirm');
        //return redirect('/booking3');
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
        $booking = Booking::find(session('booking_id'));
        return view('public.confirm')
            ->with('property', Property::find(session('booking_property_id')))
            ->with('booking', $booking);
    }
}
