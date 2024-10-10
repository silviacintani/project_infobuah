@extends('template/dashboard')
@section('content')
    
<h2 style="margin-left: 100px" class="mt-5">Input Data</h2>
@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item}}</li>
            @endforeach
        </ul>
    @endif
    <form action="/user/create" method="post" style="margin-left: 100px">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" class="@error('name') error @enderror" id="" value="{{old('name')}}"></td>
                <td>
                    @error('name')
                    {{$message}}
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id=""></td>
                <td>
                    @error('password')
                    {{$message}}
                    @enderror
                </td>
            </tr>
            {{-- <tr class="mb-3">
                <td class="form-label">Level</td>
                <td>
                    <select name="levels_id" id="" class="form-select border-dark">
                        @foreach ($level_user as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_level}}</option>
                        @endforeach
                    </select>
                </td>
            </tr> --}}
            <tr>
                <td>
                    <input type="submit" value="SIMPAN" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
@endsection