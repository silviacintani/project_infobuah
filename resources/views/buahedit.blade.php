@extends('template/dashboard')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Infobuah</h1>
        <form action="/buah/update/{{$buah->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_buah" class="form-label">Nama buah</label>
                <input type="text" class="form-control" id="nama_buah" placeholder="input nama buah" name="nama_buah">
            </div>

            {{-- <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" rows="5" class="form-control" placeholder="input deskripsi buah" name="deskripsi"></textarea>
            </div> --}}

            <div class="mb-3">
                <label for="manfaat" class="form-label">Manfaat</label>
                <input type="text" class="form-control" id="manfaat" placeholder="input manfaat buah" name="manfaat">
            </div>

            <div class="form-group pt-2">
                <label for="image" class="form-label">foto</label>
                <input type="file" class="form-control-file" name="foto" placeholder="foto">
            </div>

            <button type="submit" class="btn" style="background-color: brown">Simpan</button>
        </form>
    </div>
@endsection