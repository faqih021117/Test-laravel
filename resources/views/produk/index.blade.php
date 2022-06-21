@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <h2 class="text-center"> Produk </h2>
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success') }} </p>
        </div>
        @endif
        <div class="row">
            <div class="col-sm">
                <a href="{{action('ProdukController@create')}} " class="btn btn-primary">Tambah Data</a>
            </div>
            <form method="get" action="{{ url ('home')}}">
                <div class="row">
                    <div class="col-lg-8">
                        <input type="text" name="keyword" class="form-control" placeholder="search">
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <br/>
        <table class="table striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>tanggal</th>
                    <th >Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_produk as $produk)
                    <tr>
                        <td>{{$produk['id_produk']}} </td>
                        <td>{{$produk['nama_produk']}} </td>
                        <td>{{$produk->Kategori->nama_kategori}} </td>
                        <td>{{$produk['harga']}} </td>
                        <td>{{$produk['status']}} </td>
                        <td>{{$produk['tanggal']}} </td>
                        <td class="d-flex mr-3">
                            <a href="{{action('ProdukController@edit',$produk['id_produk'])}} " class="btn btn-warning mr-3">Edit</a> 
                            <form action="{{action('ProdukController@destroy',$produk['id_produk'])}} " method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection