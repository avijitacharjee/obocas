<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function property1($type)
    {
        session(['pp_'.'property_type'=>$type]);
        return redirect('/property2');
    }
    public function property2($numberOfHotels)
    {
        session(['pp_'.'property_number_of_hotels'=>$numberOfHotels]);
        return redirect('/property3');
    }
    public function property3(Request $request){
        $values = $request->all();
        foreach($values as $key => $value){
            session(['pp_'.$key=>$value]);
        }
        return redirect('/property4');
    }
    public function property4(Request $request){
        $values = $request->all();
        foreach($values as $key => $value){
            session(['pp_'.$key=>$value]);
        }
        return redirect('/property5');
    }
    public function property5(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session(['pp_'.$key=>$value]);
        }
        return redirect('/property6');
    }
    public function property6(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session(['pp_'.$key=>$value]);
        }
        return redirect('/property7');
    }
    public function property7(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session(['pp_'.$key=>$value]);
        }
        return redirect('/property8');
    }
    public function property8(Request $request){
        session(['pp_property_images'=>$this->saveImages($request->images)]);
        return redirect('/property9');
    }
    public function property9(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session(['pp_'.$key=>$value]);
        }
        return redirect('/property10');
    }
    public function property10(Request $request){
        $values = $request->all();

        $cc='';
        $cc_ids = $request->cc_id;
        foreach($cc_ids as $cc_id){
            $cc=$cc.$cc_id.',';
        }
        $cc = substr($cc,0,-1);
        $values['cc_id'] = $cc;

        foreach($values as $key=>$value){
            session(['pp_'.$key=>$value]);
        }
        $data = [];
        $sessionAllData = session()->all();
        foreach($sessionAllData as $key=>$value){
            if(substr($key,0,3)=="pp_"){
                $data[substr($key,3)] = $value;
            }
        }
        unset($data['proceed']);
        Property::create($data);
        return redirect('/');
    }
    public function saveImages($images){
        if($images)
        {
            $imageNames='';
            foreach($images as $key=>$image)
            {
                $extension = 'png';
                $imageName = date("Y-m-d-h-i-s").Str::random(5).'.'.$extension;
                //$image->store('property');
                $imageFullName = 'images/'.$imageName;
                $image->storeAs('public',$imageFullName);
                // Storage::disk('public')->put($imageFullName,$image->str);
                $imageNames = $imageNames.$imageFullName.';';
            }
            return substr($imageNames,0,-1);
        }else {
            return 'no images';
        }
    }
    public function index(): View
    {
        $hotels = Property::all();
        foreach ($hotels as $hotel){
            $images = explode(';',$hotel->property_images);
        }
        $hotels->images=$images;
        session()->flush();
        return view('public.index')
            ->with('hotels',$hotels);
    }

    public function show(Property $property): View
    {
        session(['booking_property_id'=>$property->id]);
        return view('public.booking-step-one')
            ->with('property',$property);
    }
}
