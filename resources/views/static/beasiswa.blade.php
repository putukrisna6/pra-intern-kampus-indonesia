@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Halaman Informasi Beasiswa</h1>
    </div>
    <hr>
    <div class="jumbotron">
        <div class="row justify-content-center">
            @foreach ($beasiswas as $b)
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <img class="card-img-top" style="height: 5em; object-fit: cover;" src="{{ asset('image/placeholder-image-card.webp') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->nama_beasiswa }}</h5>
                            <p class="text-muted">{{ $b->penyelenggara_beasiswa }}</p>
                            <p class="card-text">{{ $b->deskripsi_beasiswa }}</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-muted">{{  date('D, d M Y', strtotime($b->updated_at)) }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container justify-content-center d-flex">
    <span>
        {{ $beasiswas->links("pagination::bootstrap-4") }}
    </span>
</div>
@endsection
