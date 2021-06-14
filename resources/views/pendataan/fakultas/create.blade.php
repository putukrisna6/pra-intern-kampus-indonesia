@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah Fakultas</h1>
    </div>
    <form method="post" action="/pendataan/fakultas" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_fakultas" class="">Nama Fakultas</label>
            <input id="nama_fakultas"
                    type="text"
                    class="form-control @error('nama_fakultas') is-invalid @enderror"
                    name="nama_fakultas"
                    value="{{ old('nama_fakultas') }}"
                    autofocus>
            @error('nama_fakultas')
                <strong>{{ $message }}</strong>
            @enderror
            <div class="form-group">
                <input id="id_kampus"
                        type="hidden"
                        class="form-control @error('id_kampus') is-invalid @enderror"
                        name="id_kampus"
                        value="{{ $id_kampus }}"
                        autocomplete="id_kampus" autofocus>
                @error('id_kampus')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
