@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="About Blog Chelse Novitasari, Seputar Informasi Tranding dan Popular">
    <meta name="keyword" value="about blog chelse, tentang blogchelse, apa itu blogchel">
    <meta property="og:title" content="About Laravel Blog - Chelse Novitasari" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="Blog Chelse Novitasari" />
    <meta property="og:description" value="About Blog Chelse Novitasari, Seputar Informasi Tranding dan Popular">
    <meta property="og:image" value="https://mubatekno.com/front/assets/img/logo-vertikal.png">
@endpush

@section('title', 'About Laravel Blog - Chelse Novitasari')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="zoom-in">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
                <a href="{{ asset('front/img/laravel.png') }}">
                    <img class="card-img-top featured-img" src="{{ asset('front/img/laravel.png') }}" alt="About Laravel Blog" /></a>

                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">About Laravel Blog</h2>
                    <p class="card-text">
                        <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit voluptates architecto ab quo exercitationem laboriosam nemo? Enim reprehenderit tenetur vitae veritatis earum! Laborum, quibusdam dolores possimus dolorum iste voluptatibus repellendus?
                        </p>

                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quasi odio tempora repellendus dolore officiis impedit, dolor commodi esse quae non quibusdam. Voluptate natus voluptatibus cumque quia minus, eveniet similique.
                        </p>

                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolorum sapiente corrupti distinctio consequatur ad, similique voluptatem odio maxime blanditiis? Doloribus et asperiores labore dolorum eius tempora, a sunt nam!
                        </p>

                        <ul>
                            <li><a href="https://youtube.com/@mubateknologi">YouTube</a></li>
                            <li><a href="https://facebook.com/@Laravel">Facebook</a></li>
                            <li><a href="https://instagram.com/@laravelnews">Instagram</a></li>
                        </ul>
                    </p>
                </div>
            </div>

        </div>
        <!-- Side widgets-->
        @include('front.layout.side-widget')
    </div>
</div>
@endsection
