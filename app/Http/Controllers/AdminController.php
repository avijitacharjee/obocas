<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;
use App\Models\CarousalImage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function  hotels()
    {
        return view('admin.hotels')
            ->with('properties',Property::all());
    }
    public function bookings()
    {
        return view('admin.bookings')
            ->with('bookings',Booking::all());
    }
    public function images()
    {
        return view('admin.images')
            ->with('images',CarousalImage::all());
    }
    public function addImage()
    {
        return view('admin.add-image');
    }
    public function destroyImage(CarousalImage $carousalImage)
    {
        $carousalImage->delete();
        return redirect()->back();
    }
    public function storeImage(Request $request)
    {
        $image = $this->saveImage($request->image,$request->type);
        CarousalImage::create([
            'type'=>$request->type,
            'image'=>$image
        ]);
        return redirect()->back()->with('msg','Successfully Added');
    }
    public function saveImage($image,$type)
    {
        if ($image){
            $extension = 'png';
            $imageName = date("Y-m-d-h-i-s") . Str::random(5) . '.' . $extension;
            $imageFullName = 'images/carousel/'.$type.'/'.$imageName;
            $image->storeAs('public', $imageFullName);
            return $imageFullName;
        }else {
            return false;
        }
    }
    public function saveImages($images) {
        if ($images) {
            $imageNames='';
            foreach ($images as $key=>$image)
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
}
