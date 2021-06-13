@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah kota/Kabupaten</h1>
    </div>
    <form method="post" action="/pendataan/kota" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="font-tipis">Provinsi</label>
            <select required=""
                oninvalid="this.setCustomValidity('Provinsi Wajib Dipilih')"
                oninput="setCustomValidity('')"
                {{-- onchange="getKelurahan(this)" --}}
                class="form-control select2"
                id="id_provinsi"
                name="id_provinsi">
                <option value=""></option>
                @foreach ($provinsis as $p)
                    <option value="{{$p->id}}">{{$p->nama_provinsi}}</option>
                @endforeach
            </select>

            <label for="nama_kota" class="">Nama Kota/Kabupaten</label>
            <input id="nama_kota"
                    type="text"
                    class="form-control @error('nama_kota') is-invalid @enderror"
                    name="nama_kota"
                    value="{{ old('nama_kota') }}"
                    autofocus>
            @error('nama_kota')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
