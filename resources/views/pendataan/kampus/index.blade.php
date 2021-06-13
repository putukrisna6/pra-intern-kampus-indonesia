@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Pendataan Kampus</h1>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ url('pendataan/kampus/create') }}" class="btn btn-info btn-block" style="width: 50%">Tambah Kampus</a>
    </div>
</div>
@endsection
