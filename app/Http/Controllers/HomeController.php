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

    public function manfaat($id){
        $data['buah'] = Buah::find($id);
        return view('manfaat', $data);
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

    public function manfaatd(){
        return view('manfaatd');
    }

    public function manfaati(){
        return view('manfaati');
    }

    public function manfaatk(){
        return view('manfaatk');
    }
}
