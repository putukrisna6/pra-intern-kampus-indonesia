@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah Jurusan</h1>
    </div>
    <form method="post" action="/pendataan/jurusan/{{ $jurusan->id }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label class="font-tipis">Fakultas</label>
            <select required=""
                oninvalid="this.setCustomValidity('Fakultas Wajib Dipilih')"
                oninput="setCustomValidity('')"
                class="form-control select2"
                id="id_fakultas"
                name="id_fakultas">
                <option value=""></option>
                @foreach ($fakultas as $f)
                    <option value="{{$f->id}}" @if ($jurusan->id_fakultas == $f->id) selected="selected" @endif>{{$f->nama_fakultas}}</option>
                @endforeach
            </select>

            <label for="nama_jurusan" class="">Nama Jurusan</label>
            <input id="nama_jurusan"
                    type="text"
                    class="form-control @error('nama_jurusan') is-invalid @enderror"
                    name="nama_jurusan"
                    value="{{ old('nama_jurusan') ?? $jurusan->nama_jurusan }}"
                    autofocus>
            @error('nama_jurusan')
                <strong>{{ $message }}</strong>
            @enderror

            <label for="kuota" class="">Kuota Jurusan</label>
            <input id="kuota"
                    type="text"
                    class="form-control @error('kuota') is-invalid @enderror"
                    name="kuota"
                    value="{{ old('kuota') ?? $jurusan->kuota }}"
                    autofocus>
            @error('kuota')
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
        <button class="btn btn-primary">Edit</button>
    </form>
    <form method="post" action="/pendataan/jurusan/delete/{{ $jurusan->id }}" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <hr>
        <button class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
