<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function login(){
        return view('login');
    }

    public function show(){
        $data['buah'] = Buah::all();
        return view('tampilan',$data);
    }

    public function manfaat(){
        return view('manfaat');
    }

    public function informasi(){
        return view('informasi');
    }

    public function infoapelh(){
        return view('infoapelh');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function manfaata(){
        return view('manfaata');
    }

    public function manfaatk(){
        return view('manfaatk');
    }

    public function manfaatt(){
        return view('manfaatt');
    }

    public function manfaats(){
        return view('manfaats');
    }

    public function manfaatp(){
        return view('manfaatp');
    }

    public function manfaatm(){
        return view('manfaatm');
    }

    public function manfaatd(){
        return view('manfaatd');
    }

    public function manfaatap(){
        return view('manfaatap');
    }
}
