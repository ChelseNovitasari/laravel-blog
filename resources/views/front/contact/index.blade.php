@extends('front.layout.template')

@section('title', 'Contact Laravel Blog - Chelse Novitasari')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8" data-aos="zoom-in">
            <!-- Featured blog post-->
            <div class="card mb-4 shadow">
               <div class="text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2040850.2032584744!2d102.51080624626279!3d-2.4951702920919017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3ab6d033619d21%3A0xb0a56875e19b2d78!2sKabupaten%20Musi%20Banyuasin%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1786583822550!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
               </div>

                <div class="card-body">
                    <div class="small text-muted">{{ date('d/m/Y') }}</div>
                    <h2 class="card-title">Contact Laravel Blog</h2>
                    <p class="card-text">
                        <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit voluptates architecto ab quo exercitationem laboriosam nemo? Enim reprehenderit tenetur vitae veritatis earum! Laborum, quibusdam dolores possimus dolorum iste voluptatibus repellendus?
                        </p>

                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quasi odio tempora repellendus dolore officiis impedit, dolor commodi esse quae non quibusdam. Voluptate natus voluptatibus cumque quia minus, eveniet similique.
                        </p>

                        <ul>
                            <li>Phone : {{ $config['phone'] }}</li>
                            <li>Email : {{ $config['email'] }}</li>
                            <li><a href="https://youtube.com/{{ $config['youtube'] }}">YouTube</a></li>
                            <li><a href="https://facebook.com/{{ $config['facebook'] }}">Facebook</a></li>
                            <li><a href="https://instagram.com/{{ $config['instagram'] }}">Instagram</a></li>
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
