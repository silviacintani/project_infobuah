<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function dashboard(){
        return view('template/dashboard');
    }

    public function authentication(Request $request)
    {
        $validatedata = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedata)){
            return redirect('/index');
        }

        return redirect()->back()->with('statuslogin', 'Maaf Login anda gagal');
    }
    
}
