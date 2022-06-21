@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center"> My profile </h2>
    <div class="card m-5 p-5">
        <div class="row">
            <div class="col-lg-2">
                <h5>Nama</h5>
                <h5>Email</h5>
            </div>
            <div class="col-lg-10">
                <h5>{{ Auth::user()->name }}</h5>
                <h5>{{ Auth::user()->email }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection