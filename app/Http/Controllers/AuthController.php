<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function Register(Request $request)
    {
        $validate = $request->validate([
            'email'=>'unique:users'
        ]);
        $user = new User();
        $user->name = ".";
        $user->password = ".";
        $user->email = $request->email;
        $user->save();
        session(['email'=>$request->email]);
        session(['id'=>$user->id]);
        return redirect('/',201);
    }
    public function checkUserByPhone(Request $request)
    {
        $user = User::where('phone',$request->phone)->first();
        if($user){
            return response()->json(['user'=>$user,'otp'=>'654321','success'=>true]);
        }else {
            return response()->json(['user'=>null,'otp'=>'654321','success'=>false]);
        }
    }
    public function signOtp(Request $request){
        $phone = $request->phone;
        $otp = '654321';
        return view('public.verify-otp')
            ->with('phone',$phone)
            ->with('otp',$otp);
    }

    public function verifyOtp(Request $request){
        $user = User::where('phone', $request->phone)->first();
        if ($user){
            session(['email'=>$user->email]);
            session(['name' => $user->name]);
            return redirect('/',201);
        }else {
            return view('public.complete-profile')->with('phone',$request->phone);
        }
    }
    public function completeProfile(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        session(['email'=>$user->email]);
        session(['name' => $user->name]);
        return redirect('/',201);
    }

    // public function signOtp(Request $request){
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->phone = $request->phone;
    //     $user->save();
    //     session(['email'=>$request->email]);
    //     session(['id'=>$user->id]);
    //     session(['name' => $request->name]);
    //     return redirect('/verify-otp',201);
    // }
}
