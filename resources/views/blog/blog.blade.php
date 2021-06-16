@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Blog Post</h1>
    </div>
    <hr>
    @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="jumbotron">
                        <div class="row justify-content-center">
                            <h3>
                                <a href={{ url('post/'.$post->slug) }}>{{ $post->title }}</a>
                            </h3>
                            <p>{{ $post->summary }}</p>
                        </div>
                    </div>
                @endforeach
            @endif

</div>
<div class="container justify-content-center d-flex">
    <span>
        {{-- {{ $beasiswas->links("pagination::bootstrap-4") }} --}}
    </span>
</div>
@endsection
