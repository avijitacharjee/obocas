<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function property1($type)
    {
        session(['property_type'=>$type]);
        return redirect('/property2');
    }
    public function property2($numberOfHotels)
    {
        session(['property_number_of_hotels'=>$numberOfHotels]);
        return redirect('/property3');
    }
    public function property3(Request $request){
        $values = $request->all();
        foreach($values as $key => $value){
            session([$key=>$value]);
        }
        return redirect('/property4');
    }
    public function property4(Request $request){
        $values = $request->all();
        foreach($values as $key => $value){
            session([$key=>$value]);
        }
        return redirect('/property5');
    }
    public function property5(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session([$key=>$value]);
        }
        return redirect('/property6');
    }
    public function property6(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session([$key=>$value]);
        }
        return redirect('/property7');
    }
    public function property7(Request $request){
        $values = $request->all();
        foreach($values as $key=>$value){
            session([$key=>$value]);
        }
        return redirect('/property8');
    }
    public function property8(Request $request){
        return $this->saveImages($request->images);
    }
    public function saveImages($images){
        if($images)
        {
            $imageNames='';
            foreach($images as $image)
            {
                $extension = $image->extension();
                $imageName = date("Y-m-d-h-i-s").Str::random(5).'.'.$extension;
                //$image->store('property');
                $imageFullName = 'images/'.$imageName;
                Storage::disk('public')->put($imageFullName,$image);
                $imageNames = $imageNames.$imageFullName.';';
            }
            return $imageNames;
        }else {
            return 'no images';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyRequest  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
