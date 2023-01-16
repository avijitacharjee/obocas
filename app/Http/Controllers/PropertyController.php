<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Models\CarousalImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use DateTime;


class PropertyController extends Controller
{
    public function property1($type)
    {
        session(['pp_' . 'property_type' => $type]);
        return redirect('/property2');
    }
    public function property2($numberOfHotels)
    {
        session(['pp_' . 'property_number_of_hotels' => $numberOfHotels]);
        return redirect('/property3');
    }
    public function property3(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        return redirect('/property4');
    }
    public function property4(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        return redirect('/property5');
    }
    public function property5(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        return redirect('/property6');
    }
    public function property6(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        return redirect('/property8');
    }
    public function property7(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        return redirect('/property8');
    }
    public function property8(Request $request)
    {
        session(['pp_property_images' => $this->saveImages($request->images)]);
        return redirect('/property9');
    }
    public function property9(Request $request)
    {
        $values = $request->all();
        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        return redirect('/property10');
    }
    public function property10(Request $request)
    {
        $values = $request->all();

        $cc = '';
        $cc_ids = $request->cc_id;
        foreach ($cc_ids as $cc_id) {
            $cc = $cc . $cc_id . ',';
        }
        $cc = substr($cc, 0, -1);
        $values['cc_id'] = $cc;

        foreach ($values as $key => $value) {
            session(['pp_' . $key => $value]);
        }
        $data = [];
        $sessionAllData = session()->all();
        foreach ($sessionAllData as $key => $value) {
            if (substr($key, 0, 3) == "pp_") {
                $data[substr($key, 3)] = $value;
            }
        }
        unset($data['proceed']);
        $user = User::find(auth()->user()->id);
        $user->role_id = 3;
        $user->save();
        Property::create($data);
        return redirect('/');
    }
    public function saveImages($images)
    {
        if ($images) {
            $imageNames = '';
            foreach ($images as $key => $image) {
                $extension = 'png';
                $imageName = date("Y-m-d-h-i-s") . Str::random(5) . '.' . $extension;
                $imageFullName = 'images/' . $imageName;
                $image->storeAs('public', $imageFullName);
                $imageNames = $imageNames . $imageFullName . ';';
            }
            return substr($imageNames, 0, -1);
        } else {
            return 'no images';
        }
    }
    public function index(Request $request)
    {
        if ($request->coupon) {
            session(['coupon' => $request->coupon]);
        }
        $hotels = Property::all();
        foreach ($hotels as $hotel) {
            $images = explode(';', $hotel->property_images);
        }
        $hotels->images = $images;

        $email = session('email');
        $id = session('id');
        $name = session('name');
        // session()->flush();
        // session(['email'=>$email]);
        // session(['id'=>$id]);
        // session(['name' => $name]);
        return view('public.index')
            ->with('hotels', $hotels)
            ->with('carousalImages', CarousalImage::where('type', 'index')->get());
    }

    public function show(Property $property, Request $request): View
    {
        if (!$request->has('number_of_persons')) {
            return view('public.booking-step-one')
                ->with('property', $property);
        }
        $amount = 0;
        $fromDate = new DateTime(explode(' - ', $request->dates)[0]);
        $toDate = new DateTime(explode(' - ', $request->dates)[1]);
        $numOfDays = $fromDate->diff($toDate)->days;
        $pricePerDay = $property->room_price_x_persons;
        $amount = $pricePerDay * $numOfDays;
        // dd($request->all() + [
        //     'amount' => $amount,
        //     'fromDate' => $fromDate,
        //     'toDate' => $toDate,
        //     'd' => $numOfDays,
        //     'ppd' => $pricePerDay
        // ]);
        session(['booking_property_id' => $property->id]);

        return view('public.booking-step-one')
            ->with('property', $property)
            ->with('amount', $amount)
            ->with('numOfDays', $numOfDays)
            ->with('numOfPersons', $request->number_of_persons);
    }

    public function show1(Property $property): View
    {
        session(['booking_property_id' => $property->id]);
        return view('public.booking-temp')
            ->with('property', $property);
    }
    public function search(Request $request): View
    {
        Log::channel('debug')->info($request->all());
        $lowestPrice = Property::orderBy('cot_price', 'ASC')->get();
        $heighestPrice = Property::orderBy('cot_price', 'DESC')->get();
        $bestReviewed = Property::all();
        return view('public.searchresults')
            ->with('properties', Property::all())
            ->with('lowestPrice', $lowestPrice)
            ->with('heighestPrice', $heighestPrice)
            ->with('bestReviewed', $bestReviewed);
    }
}
