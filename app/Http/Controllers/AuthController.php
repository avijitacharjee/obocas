<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\SmsService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Register(Request $request)
    {
        $validate = $request->validate([
            'email' => 'unique:users'
        ]);
        $user = new User();
        $user->name = ".";
        $user->password = ".";
        $user->email = $request->email;
        $user->save();
        session(['email' => $request->email]);
        session(['id' => $user->id]);
        return redirect('/', 201);
    }
    public function checkUserByPhone(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();
        if ($user) {
            return response()->json(['user' => $user, 'otp' => '654321', 'success' => true]);
        } else {
            return response()->json(['user' => null, 'otp' => '654321', 'success' => false]);
        }
    }
    public function signInPost(Request $request)
    {
        $phone = $request->phone;
        $otp = random_int(100000, 999999);
        $user = User::where('phone', $request->phone)->first();
        if ($user) {
            return view('public.enter-pass')
                ->with('user', $user);
        } else {
            $smsService = new SmsService();
            $smsService->sendOtp($phone, $otp);
            session(['otp' => $otp, 'phone' => $phone]);
            return redirect('/verify-otp');
        }
    }
    public function hotelSignInPost(Request $request){
        $phone = $request->phone;
        $otp = random_int(100000, 999999);
        $user = User::where('phone', $request->phone)->first();
        if($user) {
            return view('public.hotel-enter-pass')
                ->with('user', $user);
        }else {
            $smsService = new SmsService();
            $smsService->sendOtp($phone, $otp);
            session(['otp' => $otp, 'phone' => $phone]);
            return redirect('/hotel-verify-otp');
        }
    }
    public function verifyOtpView()
    {
        return view('public.verify-otp');
    }
    public function hotelVerifyOtpView()
    {
        return view('public.hotel-verify-otp');
    }
    public function verifyOtp(Request $request)
    {
        if ($request->otp == $request->otpMain) {
            return redirect('complete-profile');
        } else {
            return back()->with('msg', 'Invalid otp');
        }
    }
    public function completeProfile(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->role_id = 1;
        $user->save();
        auth()->login($user);
        return redirect('/', 201);
    }
    public function verifyPass(Request $request)
    {
        // $credentials = [
        //     'phone' => $request->phone,
        //     'password' => $request->password
        // ];
        // if(Auth::attempt($credentials)){
        //     return Auth::user();
        // }
        // else {
        //     return $credentials;

        // }
        $user = User::where('phone', $request->phone)->first();
        if ($user->password == $request->password) {
            session(['email' => $user->email]);
            session(['name' => $user->name]);
            Auth::login($user, $remember = true);
            if (Auth::user()->role->name == 'User') {
                return redirect('/', 201);
            } else if (Auth::user()->role->name == 'HotelAdmin') {
                return redirect('/hotel-admin/dashboard', 201);
            } else if (auth()->user()->role->name == 'Admin') {
                return redirect('/admin/dashboard');
            }
        } else {
            return back()->with('message', 'Invalid password');
        }
    }
    public function signin(Request $request)
    {
        return view('public.sign-otp');
    }
    public function hotelSignin(){
        return view('public.hotel-sign-otp');
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
