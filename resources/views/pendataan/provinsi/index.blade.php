@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Pendataan Provinsi</h1>
    </div>
    <hr>
    <div class="row justify-content-center">
        <h2>Provinsi Terdata</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Provinsi</th>
                <th scope="col">Jumlah Kota/Kabupaten Terdata</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($provinsi as $index => $p)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $p->nama_provinsi }}</td>
                        <td>{{ $p->jumlah_kota }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ url('pendataan/provinsi/create') }}" class="btn btn-info btn-block" style="width: 50%">Tambah Provinsi</a>
    </div>
</div>
@endsection
