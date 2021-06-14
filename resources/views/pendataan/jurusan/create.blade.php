@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah Jurusan</h1>
    </div>
    <form method="post" action="/pendataan/jurusan" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="font-tipis">Fakultas</label>
            <select required=""
                oninvalid="this.setCustomValidity('fakultas Wajib Dipilih')"
                oninput="setCustomValidity('')"
                class="form-control select2"
                id="id_fakultas"
                name="id_fakultas">
                <option value=""></option>
                @foreach ($fakultas as $p)
                    <option value="{{$p->id}}">{{$p->nama_fakultas}}</option>
                @endforeach
            </select>

            <label for="nama_jurusan" class="">Nama Jurusan</label>
            <input id="nama_jurusan"
                    type="text"
                    class="form-control @error('nama_jurusan') is-invalid @enderror"
                    name="nama_jurusan"
                    value="{{ old('nama_jurusan') }}"
                    autofocus>
            @error('nama_jurusan')
                <strong>{{ $message }}</strong>
            @enderror

            <label for="kuota" class="">Kuota Jurusan</label>
            <input id="kuota"
                    type="text"
                    class="form-control @error('kuota') is-invalid @enderror"
                    name="kuota"
                    value="{{ old('kuota') }}"
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
        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
