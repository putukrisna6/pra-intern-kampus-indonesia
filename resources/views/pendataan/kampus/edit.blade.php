@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Tambah Kampus</h1>
    </div>
    <form method="post" action="/pendataan/kampus/{{ $kampus->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label class="">Provinsi</label>
            <select required=""
                oninvalid="this.setCustomValidity('Provinsi Wajib Dipilih')"
                oninput="setCustomValidity('')"
                onchange="getKotaKabupaten(this)"
                class="form-control select2"
                id="id_provinsi"
                name="id_provinsi">
                <option value=""></option>
                @foreach ($provinsis as $p)
                    <option value="{{$p->id}}">{{$p->nama_provinsi}}</option>
                @endforeach
            </select>

            <label class="">Kota/Kabupaten</label>
            <select
                required=""
                oninvalid="this.setCustomValidity('Kota/Kabupaten Wajib Dipilih'')"
                oninput="setCustomValidity('')"
                class="form-control select2"
                id="id_kota"
                name="id_kota"
                disabled>
            </select>

            <label for="jenis_kampus">Jenis Kampus</label>
            <select required
                oninvalid="this.setCustomValidity('Jenis Kampus Wajib Dipilih')"
                oninput="setCustomValidity('')"
                class="form-control select2"
                id="jenis_kampus"
                name="jenis_kampus">
                <option value=""></option>
                <option value="Negeri" @if ($kampus->jenis_kampus == 'Negeri') selected="selected" @endif>Negeri</option>
                <option value="Swasta"  @if ($kampus->jenis_kampus == 'Swasta') selected="selected" @endif>Swasta</option>
            </select>

            <label for="nama_kampus" class="">Nama Kampus</label>
            <input id="nama_kampus"
                    type="text"
                    class="form-control @error('nama_kampus') is-invalid @enderror"
                    name="nama_kampus"
                    value="{{ old('nama_kampus') ?? $kampus->nama_kampus }}"
                    autofocus>
            @error('nama_kampus')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button class="btn btn-primary">Edit</button>
    </form>
</div>

@include('pendataan.scripts.get_kota_kabupaten');
@endsection
