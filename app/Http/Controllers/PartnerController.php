<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class PartnerController extends Controller
{
    public function home()
    {
        return view('partner.index');
    }
    public function signup()
    {
        return view('partner.signup');
    }
    public function store(StorePartnerRequest $request)
    {

        return redirect('partner/dashboard',201);
    }
    public function dashboard(): View
    {
        return view('partner.dashboard.index');
    }
    public function signin(StorePartnerRequest $request)
    {
        $partner = User::where('email', $request->email)->first();
        if($partner){
            if(Hash::check($partner,$partner->password)){
                return redirect('partner/dashboard',201);
            }else {
                return back()->with('error', 'Invalid password');
            }
        }else{
            return redirect()->back()->with('error','error');
        }
    }
    public function profile(){
        $partner = Partner::find(auth()->user()->partner->id);
        return view('partner.dashboard.profile')->with('partner', $partner);
    }
}
