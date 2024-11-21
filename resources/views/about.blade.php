@extends('layout.main')

@section('container')

<div class="background">
    <img src="{{ asset('assets/img/koi-bg.png') }}" alt="">
</div>

<main class="mt-5">
    <div class="container">
    <h4 class="text-center display-6 fw-bold text-light">ABOUT</h4>
            <hr class="text-light">
        <section>
            <div class="row">
                <div class="col-md-6 gx-5 mb-4">
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="{{asset('assets/img/about-koi.png')}}" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4 text-light">
                    <h4><strong>4 Jenis Anjing Border Collie: Karakteristik dan Penampilan (Beserta Gambarnya)</strong></h4>
                    <p>
                        Jika Anda pecinta anjing, khususnya jenis Border Collie, maka mengenal lebih dalam tentang variasi penampilan dan karakter mereka akan sangat menarik! Border Collie dikenal sebagai anjing yang cerdas, energik, dan penuh kasih sayang. Namun, tidak banyak yang tahu bahwa Border Collie juga memiliki variasi penampilan yang unik.
                    </p>
                    <p>
                        Sebelum Anda mengadopsi Border Collie, ada baiknya Anda mempelajari karakteristik masing-masing agar dapat memilih yang sesuai dengan gaya hidup Anda
                    </p>
                </div>
            </div>
        </section>
        <hr class="my-5" />
        </main>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a2d9ff" fill-opacity="1"
            d="M0,32L24,37.3C48,43,96,53,144,74.7C192,96,240,128,288,128C336,128,384,96,432,80C480,64,528,64,576,69.3C624,75,672,85,720,106.7C768,128,816,160,864,170.7C912,181,960,171,1008,154.7C1056,139,1104,117,1152,128C1200,139,1248,181,1296,197.3C1344,213,1392,203,1416,197.3L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
        </path>
    </svg>
        @endsection