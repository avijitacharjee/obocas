<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\NotificationSetting;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HotelAdminController extends Controller
{
    public function storeNotificationSettings(Request $request)
    {
        $notificationSetting = NotificationSetting::first();
        $notificationSetting->get_email_notification = $request->get_email_notification;
        $notificationSetting->email_from_time = $request->email_from_time;
        $notificationSetting->email_to_time = $request->email_to_time;
        $notificationSetting->email = $request->email;

        $notificationSetting->get_sms_notification = $request->get_sms_notification;
        $notificationSetting->sms_from_time = $request->sms_from_time;
        $notificationSetting->sms_to_time = $request->sms_to_time;
        $notificationSetting->phone = $request->phone;

        $notificationSetting->get_other_notifications = 0;
        $notificationSetting->save();
        return redirect()->back()->with('notificationSetting',$notificationSetting);
    }
    public function notificationSettings()
    {
        $notificationSetting = !NotificationSetting::exists()?
            NotificationSetting::Create([
                'user_id'=>1,
                'email'=>'abc@example.com',
                'get_email_notification'=>1,
                'get_sms_notification'=>1,
                'get_other_notifications'=>1,
                'phone'=>'+880-1878-362896'
            ])
            : NotificationSetting::first();
        return view('hotel-admin.notification-settings')
            ->with('notificationSetting',$notificationSetting);
    }
    public function home(){
        return view('hotel-admin.home')->with('bookings',Booking::latest()->take(3)->get());
    }
    public function reservations(){
        $reservations = Booking::all();
        return view('hotel-admin.reservations')->with('reservations',$reservations);
    }
    public function storeRoom1(Request $request){
        $room = new Room();
        $room->property_id = 1;
        $room->user_id = Auth::user()->id;
        $room->room_type_id = $request->room_type_id;
        $room->room_name = $request->room_name;
        $room->smoking = $request->smoking;
        $room->number_of_rooms = $request->number_of_rooms;
        $room->bed_type_id = $request->bed_type_id;
        $room->number_of_beds = $request->number_of_beds;
        $room->number_of_guests = $request->number_of_guests;
        $room->room_size = $request->room_size;
        $room->room_measure_unit = $request->room_measurement_unit;
        $room->room_price = $request->room_price;
        $room->discount_available = $request->discount_available;
        $room->is_booked = false;
        $room->save();
        return back()->with('message','Successfully Added');
    }
    public function roomDetails(){
        $rooms = Room::where('user_id', Auth::user()->id)->get();
        return view('hotel-admin.room-details')->with('rooms',$rooms);
    }
    public function openCloseRooms(){
        $rooms = Room::where('user_id', Auth::user()->id)->get();
        return view('hotel-admin.open-close-rooms')->with('rooms',$rooms);
    }
    public function storeOpenCloseRooms(Request $request){
        $room = Room::find($request->room_id);
        $room->closed_from = $request->date_from;
        $room->closed_till = $request->date_until;
        $room->closed_on = implode(',', $request->days);
        $room->save();
        return back();
    }
}
