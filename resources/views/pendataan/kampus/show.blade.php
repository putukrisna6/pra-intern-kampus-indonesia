@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>{{ $kampus->nama_kampus }}</h1>
    </div>
    <hr>
    <div class="row justify-content-center">
        <h2>Fakultas dan Jurusan</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead >
              <tr>
                <th scope="col">Fakultas</th>
                <th scope="col">Jurusan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($fakultas as $fakul)
                    <tr>
                        <td rowspan="{{ count($fakul->jurusan)+1 }}">{{ $fakul->nama_fakultas }}</td>
                    </tr>
                    @foreach ($fakul->jurusan as $j)
                    <tr>
                        <td>{{ $j->nama_jurusan }}</td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <a href="/pendataan/fakultas/create/{{ $kampus->id }}" class="btn btn-info btn-block text-white" style="">Tambah Fakultas</a>
        </div>
        <div class="col-lg-4">
            <a href="/pendataan/jurusan/create/{{ $kampus->id }}" class="btn btn-info btn-block text-white" style="">Tambah Jurusan</a>
        </div>
    </div>
</div>
@endsection
