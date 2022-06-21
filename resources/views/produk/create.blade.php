@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Produk Baru </h2>
        @if ($errors->any())
        <div class="alert danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}} </p>
        </div>
            <br/>
        @endif
        <form action="{{url('produk')}} " method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nama_produk"> Nama Produk :</label>
                <input type="text" name="nama_produk" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="id_kategori">Kategori : </label>
                <select name="id_kategori" id="id_kategori" class="form-control input-sm">
                    @foreach ($data_kategori as $kategori)
                        <option value="{{$kategori->id_kategori}} ">{{$kategori->nama_kategori}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="harga">Harga : </label>
                <input type="numeric" name="harga"class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="deskripsi">status : </label>  
                <select name="status" class="form-control input-sm">
                    <option value="" selected>pilih status</option>
                    <option value="siap dirilis">siap dirilis</option>
                    <option value="belum siap dirilis">belum siap dirilis</option>
                    <option value="menunggu moderasi">menunggu moderasi</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="harga">Tanggal : </label>
                <input type="date" name="tanggal"class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-success">
                    Simpan
                </button>
            </div>
            <div class="form-group col-md-2">
                <a href="{{ URL::previous() }} ">Batal</a>
            </div>
        </div>
        </form>
    </div>
@endsection