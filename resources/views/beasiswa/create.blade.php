@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah Beasiswa</h1>
    </div>
    <form method="post" action="/beasiswa" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_beasiswa" class="">Nama Beasiswa</label>
            <input id="nama_beasiswa"
                    type="text"
                    class="form-control @error('nama_beasiswa') is-invalid @enderror"
                    name="nama_beasiswa"
                    value="{{ old('nama_beasiswa') }}"
                    autofocus>
            @error('nama_beasiswa')
                <strong>{{ $message }}</strong>
            @enderror
            <label for="penyelenggara_beasiswa" class="">Penyelenggara Beasiswa</label>
            <input id="penyelenggara_beasiswa"
                    type="text"
                    class="form-control @error('penyelenggara_beasiswa') is-invalid @enderror"
                    name="penyelenggara_beasiswa"
                    value="{{ old('penyelenggara_beasiswa') }}"
                    autofocus>
            @error('penyelenggara_beasiswa')
                <strong>{{ $message }}</strong>
            @enderror
            <label for="deskripsi_beasiswa" class="">Deskripsi Beasiswa</label>
            <input id="deskripsi_beasiswa"
                    type="text"
                    class="form-control @error('deskripsi_beasiswa') is-invalid @enderror"
                    name="deskripsi_beasiswa"
                    value="{{ old('deskripsi_beasiswa') }}"
                    autofocus>
            @error('deskripsi_beasiswa')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
