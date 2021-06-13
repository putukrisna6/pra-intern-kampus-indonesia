@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Pendataan</h1>
    </div>
    <div class="jumbotron">
        <div class="row mb-4">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pendataan Provinsi</h5>
                  <p class="card-text">Lakukan pendataan untuk provinsi.</p>
                  <a href="{{ url('pendataan/provinsi/index') }}" class="btn btn-primary">Tambah data</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Pendataan Kota/Kabupaten</h5>
                  <p class="card-text">Lakukan pendataan untuk kota/kabupaten.</p>
                  <a href="{{ url('pendataan/kota/index') }}" class="btn btn-primary">Tambah data</a>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Pendataan Kampus</h5>
                    <p class="card-text">Lakukan pendataan untuk kampus</p>
                    <a href="{{ url('pendataan/kampus/index') }}" class="btn btn-primary">Tambah data</a>
                  </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Pendataan Jurusan</h5>
                    <p class="card-text">Lakukan pendataan untuk jurusuan</p>
                    <a href="{{ url('pendataan/jurusan/index') }}" class="btn btn-primary">Tambah data</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
