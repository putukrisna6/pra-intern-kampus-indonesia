@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Blog Post</h1>
    </div>
    <hr>
    <div class="jumbotron">
        <div class="row justify-content-center">
            <div>
                @if ($post->featured_image)
                    <img src="{{ asset($post->featured_image) }}" />
                @endif
                <h3>{{ $post->title }}</h3>
                {!! $post->body !!}
            </div>
        </div>
    </div>
</div>
<div class="container justify-content-center d-flex">
    <span>
        {{-- {{ $beasiswas->links("pagination::bootstrap-4") }} --}}
    </span>
</div>
@endsection
