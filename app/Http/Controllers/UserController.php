<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;

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

    public function show()
    {
        $data['user'] = User::orderby('name', 'asc')->get();
        $data['total_user'] = User::count();
        return view('user', $data);
    }

    public function search(Request $request)
    {
        $data ['user'] = User::where('name', $request->cari)->orWhere('email', $request->cari)->get();
        $data ['total_user'] = $data['user']->count();
        return view('user', $data);
    }

    public function create()
    {
        // $data['level_user']=level_user::all();
        return view('user-create');
    }

    public function add(Request $request)
    {
        $validatedata = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            // 'levels_id' =>'required'
        ]);

        $user = User::create($validatedata);
        if ($user) {
            Session::flash('pesan', 'Data berhasil disimpan');
        }else{
            Session::flash('pesan', 'Data gagal disimpan');
        }

        
        // user::create([
        //     'name' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email
        // ]);

        return redirect('user');
    }

    public function delete(Request $request)
    {
        $delete = User::where('id', $request->id)->delete();
        if ($delete) {
            Session::flash('pesan', 'Data berhasil dihapus');
        }else {
            Session::flash('pesan', 'Data gagal dihapus');
        }
        
        return redirect('user');
    }

    public function edit(Request $request)
    {
        $data['user'] = User::find($request->id);
        return view('user-edit', $data);
    }

    public function update(Request $request)
    {
        $update= User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : DB ::raw('password')

        ]);

        if ($update) {
            Session::flash('pesan', 'Data berhasil diubah');
        }else {
            Session::flash('pesan', 'Data gagal diubah');
        }

        return redirect('user');
    }
    
}
