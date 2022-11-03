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
            return response()->json(['user'=>$user,'success'=>true]);
        }else {
            return response()->json(['user'=>null,'success'=>false]);
        }
    }
    public function signOtp(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        session(['email'=>$request->email]);
        session(['id'=>$user->id]);
        session(['name' => $request->name]);
        return redirect('/',201);
    }
}
