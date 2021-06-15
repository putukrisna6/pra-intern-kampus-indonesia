@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Pendataan Beasiswa</h1>
    </div>
    <hr>
    <div class="row justify-content-center">
        <h2>Beasiswa Terdata</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Beasiswa</th>
                <th scope="col">Penyelenggara</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($beasiswas as $index => $b)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $b->nama_beasiswa }}</td>
                        <td>{{ $b->penyelenggara_beasiswa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ url('beasiswa/create') }}" class="btn btn-info btn-block" style="width: 50%">Tambah Informasi Beasiswa</a>
    </div>
</div>
@endsection
