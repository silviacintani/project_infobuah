<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BuahController extends Controller
{
    //
   public function show(){
    $data ['buah'] = Buah::all();
    // $data['buah'] = Buah::all();
    $data['total'] = Buah::count();
    return view('/index', $data);
   } 

   public function search(Request $request){
    $data['buah'] =Buah::where('nama_buah', $request->cari)->orWhere('manfaat', $request->cari)->get();
    $data['total'] = $data['buah']->count();
    return view('/index',$data);
   }

   public function create(){
    return view('/buahcreate');
   }

   public function add(Request $request){
    $validate = $request->validate([
        'nama_buah' => 'required',
        // 'deskripsi' => 'required',
        'manfaat' => 'required',
        'foto' => 'image'
    ]);
    $fileName = '';
    if ($request->file('foto')) {
        # code...
        $extfile = $request->file('foto')->getClientOriginalExtension();
        $fileName = time().".".$extfile;
        $request->file('foto')->storeAs('foto',$fileName);
    }else {
        # code...
        $fileName = '';
    }
    $buah = Buah::create([
        'nama_buah' => $request->nama_buah,
        // 'deskripsi' => $request->deskripsi,
        'manfaat' => $request->manfaat,
        'foto' => $fileName
    ]);
    if ($buah) {
        # code...
        Session::flash('pesan', 'Data berhasil ditambahkan');
    } else {
        # code...
        Session::flash('pesan', 'Data gagal ditambahkan');

    }
    return redirect('/index');
   }

   public function edit(Request $request){
    $data['buah'] = Buah::find($request->id);
    return view('buahedit',$data);
   }
   public function delete(Request $request){
    $buah = Buah::find($request->id);
    $delete = Buah::where('id', $request->id)->delete();
    if ($delete) {
        # code...
        if ($buah->foto) {
            # code...
            Storage::delete('foto/'.$buah->foto);
        }
    } else {
        # code...
        Session::flash( 'pesan', 'Data berhasil dihapus');
    }
    return redirect('/index');
   }

   public function update(Request $request){
    $buah = Buah::find($request->id);

    $fileName = '';
    if ($request->file('foto')) {
        # code...
        $extfile = $request->file('foto')->getClientOriginalExtension();
        $fileName = time().".".$extfile;
        $request->file('foto')->storeAs('foto',$fileName);
   }
   $update = Buah::where('id',$request->id)->update([
    'nama_buah' => $request->nama_buah,
    'manfaat' => $request->manfaat,
    // 'deskripsi' => $request->deskripsi,
    'foto' => $fileName
   ]);

   if ($update) {
    # code...
    Session::flash('pesan', 'Data berhasil diubah');
   } else {
    # code...
    Session::flash('pesan', 'Data gagal diubah');
   }
   return redirect('/index');

   function detail($id){
    $data['buah'] = Buah::where('id', $id)->first();
    return view('manfaat', $data);
   }
}
}
