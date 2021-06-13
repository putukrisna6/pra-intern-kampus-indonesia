@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Pendataan Kota</h1>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ url('pendataan/kota/create') }}" class="btn btn-info btn-block" style="width: 50%">Tambah Kota/Kabupaten</a>
    </div>
</div>
@endsection
