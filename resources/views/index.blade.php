@extends('template/dashboard')
@section('content')
    
{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body> --}}
    <div class="container">
        <div class="page-item">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pb-4">

                <div class="container pt-5">
                    @if (Session::has ('pesan'))
                    <div class="alert">{{Session::get('pesan')}}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/buah/create" class="btn text-white" style="background-color:#B99470 ">Tambah info</a><br>
                        </div>
                        <div class="col-md-6">
                            <form action="/search" method="post" >
                                @csrf
                                <div class="input-group mb-3">
                                <input type="search" name="cari" id="" class="form-control" placeholder="Search">
                                <button class="btn text-white" style="background-color: #B99470 " type="submit">Cari </button>
                                </div>
                            </form>
                        </div>
                    </div>
                
                Total Data : {{$total}}
                    <table class="table">
                        <tr class="table-light">
                            <th>NO</th>
                            <th>NAMA BUAH</th>
                            <th>DESKRIPSI</th>
                            <th>MANFAAT</th>
                            <th>FOTO</th>
                            <th>AKSI</th>
                        </tr>
                        @foreach ($buah as $key =>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->nama_buah}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->manfaat}}</td>
                            <td><img src="{{asset ('/storage/foto/'.$item->foto) }}" alt="" style="width: 50px; height:50px"></td>
                            <td>
                                <a href="/buah/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-secondary">Hapus</a>
                                <a href="/buah/edit/{{ $item->id }}" class="btn btn-secondary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection

{{-- </body>
</html> --}}
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>  