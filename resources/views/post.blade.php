@extends('layout.main')

@section('container')

<div class="background">
    <img src="{{ asset('assets/img/koi-bg.png') }}" alt="">
</div>

<div class="container text-center mt-3">
    <h4 class="card-title fw-bold text-light mt-3" style="font-size: 50px">
        {{ $post->nama }}
    </h4>
    <img src="{{ asset('images/post/'. $post->gambar) }}" class="card-img-top mt-3 w-50 h-50">

    <p class="card-text text-light mt-3">
        {{ $post->isi }}
    </p>
    <a href="/gallery" class="text-light mt-3">BACK</a>
</div>
@endsection