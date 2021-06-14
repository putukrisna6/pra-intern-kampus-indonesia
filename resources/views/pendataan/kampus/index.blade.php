@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Pendataan Kampus</h1>
    </div>
    <hr>
    <div class="row justify-content-center">
        <h2>Lihat Data Kampus</h2>
    </div>
    <div class="form-group">
        <label class="">Provinsi</label>
        <select required=""
            oninvalid="this.setCustomValidity('Provinsi Wajib Dipilih')"
            oninput="setCustomValidity('')"
            onchange="getKotaKabupaten(this); getKampusByProvinsi(this);"
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
            oninvalid="this.setCustomValidity('Kota/Kabupaten Wajib Dipilih')"
            oninput="setCustomValidity('')"
            onchange="getKampus(this)"
            class="form-control select2"
            id="id_kota"
            name="id_kota"
            disabled>
        </select>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead >
              <tr>
                <th scope="col">ID Kampus</th>
                <th scope="col">Nama Kampus</th>
                <th scope="col">Jenis Kampus</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody id='id_kampus'>
            </tbody>
        </table>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ url('pendataan/kampus/create') }}" class="btn btn-info btn-block text-white" style="width: 50%">Tambah Kampus</a>
    </div>
</div>

@include('pendataan.scripts.get_kota_kabupaten');
<script>
    function getKampus(kota) {
        $('#id_kampus').empty();
        id_kota = kota[kota.selectedIndex].value;

        url = "{{ env('APP_URL') }}" + "/api/kampus/" + id_kota;
        $.get(url, function(data){
            $.each(data, function(index, kampus){
                $('#id_kampus').append('<tr><th scope="row">'+kampus.id+'</th><td>'+kampus.nama_kampus+'</td><td>'+kampus.jenis_kampus+'</td><td><a href="/pendataan/kampus/show/'+kampus.id+'" class="btn btn-info text-white">Lihat Kampus</a></td></tr>');
            });
        });
    }
</script>
<script>
    function getKampusByProvinsi(provinsi) {
        $('#id_kampus').empty();
        id_provinsi = provinsi[provinsi.selectedIndex].value;

        url = "{{ env('APP_URL') }}" + "/api/kampus/provinsi/" + id_provinsi;
        $.get(url, function(data){
            $.each(data, function(index, kampus){
                $('#id_kampus').append('<tr><th scope="row">'+kampus.id+'</th><td>'+kampus.nama_kampus+'</td><td>'+kampus.jenis_kampus+'</td><td><a href="/pendataan/kampus/show/'+kampus.id+'" class="btn btn-info text-white">Lihat Kampus</a></td></tr>');
            });
        });
    }
</script>
@endsection
