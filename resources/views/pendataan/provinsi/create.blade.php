@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah Provinsi</h1>
    </div>
    <form method="post" action="/pendataan/provinsi" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_provinsi" class="">Nama Provinsi</label>
            <input id="nama_provinsi"
                    type="text"
                    class="form-control @error('nama_provinsi') is-invalid @enderror"
                    name="nama_provinsi"
                    value="{{ old('nama_provinsi') }}"
                    autofocus>
            @error('nama_provinsi')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
