@extends('layout.main')

@section('container')

<div class="background">
    <img src="{{ asset('assets/img/koi-bg.png') }}" alt="">
</div>

<section>
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h4 class="text-center display-6 fw-bold text-light">CONTACT</h4>
            <hr class="text-light">
            <div class="row">
                <div class="col-md-6 text-light">
                    <h3 class="display-5">Hubungi kontak saya jika terjadi kesalahan di website ini</h3>
                    <div class="kontak">
                        <h6 class="fw-bold">Kontak</h6>
                        <div class="d-flex">
                            <div>
                                <i class="fa-regular fa-map"></i>
                            </div>
                            <a class="text-light" href="https://goo.gl/maps/pqCjDrR2nkDLS4Pf8">Kabupaten Karangasem, Kecamatan Abang,
                                Desa Tribuana</a>
                        </div>
                        <div>
                            <i class="fa-regular fa-address-book"></i>
                            <a class="text-light" href="tel:+6281237877620">081 234 567 891</a>
                        </div>
                        <div>
                            <i class="fa-regular fa-envelope"></i>
                            <a class="text-light" href="mailto:kadekprayogaputra46@gmail.com">tresnayoga06@gmail.com</a>
                        </div>

                        <h6 class="fw-bold pt-3">Social Media</h6>
                    </div>
                    <div class="media display-6">
                        <a href="https://web.facebook.com/prayoga.prayoga.3133" class="me-3 text-light"><i
                                class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://twitter.com/YogaHendra09" class="me-3 text-light"><i
                                class="fa-brands fa-square-twitter"></i></a>
                        <a href="https://www.instagram.com/prayoga4367/" class="me-3 text-light"><i
                                class="fa-brands fa-square-instagram"></i></a>
                    </div>
                </div>

                <div class="col-md-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0078373224655!2d115.22373107480631!3d-8.6908033885237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2410294415595%3A0xb9b6c94ad0c08b24!2sInstitut%20Bisnis%20dan%20Teknologi%20Indonesia%20(INSTIKI)!5e0!3m2!1sid!2sid!4v1699883950548!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a2d9ff" fill-opacity="1"
            d="M0,32L24,37.3C48,43,96,53,144,74.7C192,96,240,128,288,128C336,128,384,96,432,80C480,64,528,64,576,69.3C624,75,672,85,720,106.7C768,128,816,160,864,170.7C912,181,960,171,1008,154.7C1056,139,1104,117,1152,128C1200,139,1248,181,1296,197.3C1344,213,1392,203,1416,197.3L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
        </path>
    </svg>
</section>
@endsection