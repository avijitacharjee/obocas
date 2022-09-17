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
}
