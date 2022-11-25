<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Facility;
use App\Models\Nearby;
use Illuminate\Http\Request;
use App\Models\NotificationSetting;
use App\Models\Property;
use App\Models\PropertyPath;
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
    public function howToGet(Request $request){
        $property = Property::where('user_id',Auth::user()->id)->first();
        $propertyPath = PropertyPath::firstOrNew(['property_id'=>$property->id]);
        return view('hotel-admin.get-time-squers')->with('propertyPath', $propertyPath);
    }
    public function storeHowToGet(Request $request){
        $property = Property::where('user_id',Auth::user()->id)->first();
        $propertyPath = PropertyPath::firstOrNew(['property_id'=>$property->id]);
        $propertyPath->property_id = $property->id;
        $propertyPath->airport_name = $request->airport_name;
        $propertyPath->transport_type = $request->transport_type;
        $propertyPath->to = $request->to;
        $propertyPath->departs_every = $request->departs_every;
        $propertyPath->journey_time = $request->duration;
        $propertyPath->fare = $request->fare;
        $propertyPath->save();
        return back()->with('message','Successfully saved');
    }
    public function nearBy(){
        $property = Property::where('user_id',Auth::user()->id)->first();
        $nearbyRestaurant = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'restaurant'
        ]);
        $nearbyRestaurant->category = "Shopping and dining";
        $nearbyRestaurant->unit = "km";
        $nearbyRestaurant->save();

        $nearbyCafe = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'cafe'
        ]);
        $nearbyCafe->category = "Shopping and dining";
        $nearbyCafe->unit = "km";
        $nearbyCafe->save();

        $nearbyStore = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'store'
        ]);
        $nearbyStore->category = "Shopping and dining";
        $nearbyStore->unit = "km";
        $nearbyStore->save();

        $nearbyMarket = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'market'
        ]);
        $nearbyMarket->category = "Shopping and dining";
        $nearbyMarket->unit = "km";
        $nearbyMarket->save();

        $nearbyMountain = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'mountain'
        ]);
        $nearbyMountain->category = "Places of interest";
        $nearbyMountain->unit = "km";
        $nearbyMountain->save();

        $nearbyLake = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'lake'
        ]);
        $nearbyLake->category = "Places of interest";
        $nearbyLake->unit = "km";
        $nearbyLake->save();

        $nearbyRiver = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'river'
        ]);
        $nearbyRiver->category = "Places of interest";
        $nearbyRiver->unit = "km";
        $nearbyRiver->save();

        $nearbySea = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'sea'
        ]);
        $nearbySea->category = "Places of interest";
        $nearbySea->unit = "km";
        $nearbySea->save();

        $nearbyBeach = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'beach'
        ]);
        $nearbyBeach->category = "Places of interest";
        $nearbyBeach->unit = "km";
        $nearbyBeach->save();
        return view('hotel-admin.nearby')
            ->with('nearbyRestaurant',$nearbyRestaurant)
            ->with('nearbyCafe',$nearbyCafe)
            ->with('nearbyStore',$nearbyStore)
            ->with('nearbyMarket',$nearbyMarket)
            ->with('nearbyMountain',$nearbyMountain)
            ->with('nearbyLake',$nearbyLake)
            ->with('nearbyRiver',$nearbyRiver)
            ->with('nearbySea',$nearbySea)
            ->with('nearbyBeach',$nearbyBeach);
    }
    public function storeNearBy(Request $request){
        $property = Property::where('user_id',Auth::user()->id)->first();

        $nearbyRestaurant = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'restaurant'
        ]);
        $nearbyRestaurant->name = $request->restaurant_name;
        $nearbyRestaurant->distance = $request->restaurant_distance;
        $nearbyRestaurant->category = "Shopping and dining";
        $nearbyRestaurant->unit = "km";
        $nearbyRestaurant->save();

        $nearbyCafe = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'cafe'
        ]);
        $nearbyCafe->name = $request->cafe_name;
        $nearbyCafe->distance = $request->cafe_distance;
        $nearbyCafe->category = "Shopping and dining";
        $nearbyCafe->unit = "km";
        $nearbyCafe->save();

        $nearbyStore = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'store'
        ]);
        $nearbyStore->name = $request->store_name;
        $nearbyStore->distance = $request->store_distance;
        $nearbyStore->category = "Shopping and dining";
        $nearbyStore->unit = "km";
        $nearbyStore->save();

        $nearbyMarket = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'market'
        ]);
        $nearbyMarket->name = $request->market_name;
        $nearbyMarket->distance = $request->market_distance;
        $nearbyMarket->category = "Shopping and dining";
        $nearbyMarket->unit = "km";
        $nearbyMarket->save();

        $nearbyMountain = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'mountain'
        ]);
        $nearbyMountain->name = $request->mountain_name;
        $nearbyMountain->distance = $request->mountain_distance;
        $nearbyMountain->category = "Places of interest";
        $nearbyMountain->unit = "km";
        $nearbyMountain->save();

        $nearbyLake = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'lake'
        ]);
        $nearbyLake->name = $request->lake_name;
        $nearbyLake->distance = $request->lake_distance;
        $nearbyLake->category = "Places of interest";
        $nearbyLake->unit = "km";
        $nearbyLake->save();

        $nearbyRiver = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'river'
        ]);
        $nearbyRiver->name = $request->river_name;
        $nearbyRiver->distance = $request->river_distance;
        $nearbyRiver->category = "Places of interest";
        $nearbyRiver->unit = "km";
        $nearbyRiver->save();

        $nearbySea = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'sea'
        ]);
        $nearbySea->name = $request->sea_name;
        $nearbySea->distance = $request->sea_distance;
        $nearbySea->category = "Places of interest";
        $nearbySea->unit = "km";
        $nearbySea->save();

        $nearbyBeach = Nearby::firstOrNew([
            'property_id'=>$property->id,
            'type'=>'beach'
        ]);
        $nearbyBeach->name = $request->beach_name;
        $nearbyBeach->distance = $request->beach_distance;
        $nearbyBeach->category = "Places of interest";
        $nearbyBeach->unit = "km";
        $nearbyBeach->save();
        return back();
    }
    public function facility(){
        $facilities = Facility::all();
        return view('hotel-admin.facilities-services')
            ->with('facilities',$facilities);
    }
    public function storeFacility(Request $request){
        $facility = new Facility();
        $facility->property_id = Property::where('user_id', Auth::user()->id)->first()->id;
        $facility->name = $request->name;
        $facility->is_available = $request->is_available;
        $facility->save();
        return back();
    }
    public function deleteFacility(Facility $facility){
        $facility->delete();
        return back();
    }
    public function ratePlan(){
        $rooms = Room::where('user_id', Auth::user()->id)->get();
        return view('hotel-admin.rate-plans')->with('rooms',$rooms);
    }
    public function storeRatePlan(){
        return back()->with('message', 'Successfully Saved');
    }
}
