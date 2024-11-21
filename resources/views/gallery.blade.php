@extends('layout.main')

@section('container')

    <div class="banner">
        <video autoplay muted loop>
            <source src="{{ asset('background/Bg.mp4')}}" type="video/mp4">
        </video>
    </div>


<div class="container text-center mt-5">
<h4 class="text-center display-6 fw-bold text-light">JENIS ANJING</h4>
            <hr class="text-light">
    <div class="row pt-4 gx-4 gy-4">
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/post/'. $post->gambar) }}" class="card-img-top" width="200" height="200">
                <div class="card-body">
                    <h4 class="card-title fw-bold">
                        <a href="/gallery/{{ $post->id }}">{{ $post->nama }}</a>
                    </h4>
                    <hr>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br>
    <div class="card-footer">
        {{ $posts->links() }}
    </div>
</div>


@endsection
