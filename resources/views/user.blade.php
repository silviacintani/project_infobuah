@extends('template/dashboard')
    {{-- <h2>Data Pengguna</h2> --}}


    <div class="container" style="margin-right: 80px">
        <div class="page-item">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pb-4">

                <div class="container pt-5">
                    @if (Session::get('pesan'))
                    {{Session::get('pesan')}}
                    @endif
                <div class="row">
                    <div class="col-md-6">
                        <a href="/user/create" class="btn text-white" style="background-color: #B99470">Tambah Data</a>
                    </div>
                        <div class="col-md-6">
                            <form action="/user" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="search" name="cari" id="" class="form-control" placeholder="Search">
                                    <button class="btn text-white" type="submit" style="background-color: #B99470 ">Cari</button>
                                </div>
                            </form>
                        </div>
                </div>

                Total Data Pengguna : {{$total_user}}

                <table class="table">
                    <tr class="table-light">
                        <td>NO</td>
                        <td>NAMA</td>
                        <td>EMAIL</td>
                        <td>AKSI</td>
                    </tr>

                    @foreach ($user as $key=> $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="user/delete/{{$item->id}}" onclick="return window.confirm ('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                                <a href="user/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>