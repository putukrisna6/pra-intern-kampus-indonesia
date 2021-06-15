@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>Hello, {{ Auth::user()->name }}</h3>
    </div>
    <hr>
    <div class="jumbotron">
        <div class="card">
            <div class="card-header px-3 py-2">
                <p class="my-0"><strong>Pendataan Kampus</strong></p>
            </div>
            <div class="card-body">
                <p class="text-body">Lakukan pendataan kampus, fakultas, dan jurusannya.</p>
                <p class="text-body">Dapat juga dilakukan penambahan provinsi dan kota.</p>
                <a href="{{ url('pendataan/') }}" class="btn btn-primary">Go</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header px-3 py-2">
                <p class="my-0"><strong>Pendataan Beasiswa</strong></p>
            </div>
            <div class="card-body">
                <p class="text-body">Lakukan pendataan beasiswa.</p>
                <a href="{{ url('#') }}" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>
</div>
@endsection
