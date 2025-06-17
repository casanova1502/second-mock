<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return view('attendance',compact('user'));
    }

    public function login()
    {
        return view('login');
    }

    public function loginStore(Request $request)
    {
        $user = $request->only(['email', 'password']);

        if (Auth::attempt($user))
        {
        // Carbon::setLocale('ja');
        // $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        //     return view('attendance',compact('user','date'));
            return redirect('/attendance');
        }

        return redirect()->back();
        
        }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
