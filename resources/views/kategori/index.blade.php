@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">Kategori Produk</h2>
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \session::get('success')}} </p> 
        </div>       
        @endif
        <div class="row">
            <div class="col-sm">
                <a href="{{action('KategoriProdukController@create')}} " class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="col-sm">
                {{ $data_kategori->links() }}
            </div>
        </div>
        <br>
        <table class="table striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_kategori as $kategori)
                    <tr>
                        <td>{{$kategori['id_kategori']}} </td>
                        <td>{{$kategori['nama_kategori']}} </td>
                        <td class="d-flex">
                            <a href="{{action('KategoriProdukController@edit',$kategori['id_kategori'])}} " class="btn btn-warning mr-3">Edit</a>
                            <form action="{{action('KategoriProdukController@destroy',$kategori['id_kategori'])}} " method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">

                                <button class="btn btn-danger" type="submit">
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