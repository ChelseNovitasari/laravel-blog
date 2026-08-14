@extends('front.layout.template')

@push('meta-seo')
    <meta name="description" value="Article Category Blog Chelse Novitasari, Seputar Informasi Tranding dan Popular">
    <meta name="keyword" value="list article blog chelse, article blogchelse, artikel category blogchel">
    <meta property="og:title" content="Article Blog - Chelse Novitasari" />
    <meta property="og:url" value="{{ url()->current() }}">
    <meta property="og:site_name" content="Blog Chelse Novitasari" />
    <meta property="og:description" value="Article Category Blog Chelse Novitasari, Seputar Informasi Tranding dan Popular">
    <meta property="og:image" value="https://mubatekno.com/front/assets/img/logo-vertikal.png">
@endpush

@section('title', 'Article Blog - Chelse Novitasari')

@section('content')
<!-- Page content-->
<div class="container">
    <div class="mb-3">
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" name="keyword" placeholder="Search Articles..." />
                <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
            </div>
        </form>
    </div>

    @if ($keyword)
        <p>Showing articles with keyword : <b>{{ $keyword }}</b></p>
        <a href="{{ url('articles') }}" class="btn btn-secondary btn-sm mb-4">Reset</a>
    @endif

    <div class="row">
        @forelse ($articles as $item)
        <div class="col-lg-4" data-aos="zoom-in-up">
            <!-- Blog post-->
            <div class="card mb-4 shadow">
                <a href="{{ url('p/'.$item->slug) }}">
                    <img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" alt="..." />
                </a>

                <div class="card-body card-height">
                    <div class="small text-muted">
                        {{ $item->created_at->format('d-m-Y') }} | {{ $item->User->name }} |
                        <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                    </div>
                    <h2 class="card-title h4">{{ $item->title }}</h2>
                    <p class="card-text">
                        {{ Str::limit(strip_tags($item->desc), 200, '...') }}
                    </p>
                    <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                </div>
            </div>
        </div>
        @empty
            <h3>Not found</h3>
        @endforelse
        <!-- Pagination-->
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
