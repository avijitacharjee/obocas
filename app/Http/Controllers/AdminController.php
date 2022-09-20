<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;

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
}
