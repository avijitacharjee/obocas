<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
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
        $partner = Partner::create($request->all());
        session(['partner_name'=>$request->lastname]);
        return redirect('partner/dashboard',201);
    }
    public function dashboard(): View
    {
        return view('partner.dashboard.index');
    }
    public function signin(StorePartnerRequest $request)
    {
        $partner = Partner::where('email',$request->email)->where('password',$request->password)->first();
        if($partner){
            session(['partner_name'=>$partner->lastname]);
            return redirect('partner/dashboard',201);
        }else{
            return redirect()->back()->with('error','error');
        }
    }
}
