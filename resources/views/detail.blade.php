@extends('layouts.app')

@section('title', $article->title . ' - BPOM Bogor')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>{{ $article->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="{{ url('/obat') }}">Obat</a></li>
                        <li class="active">{{ Str::limit($article->title, 30) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Article Detail -->
    <div class="blog-area full-width bg-white default-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single-blog-item">
                        <div class="thumb mb-4">
                            <img src="{{ asset('assets/img/blog/placeholder.jpg') }}" alt="Artikel" class="img-fluid rounded">
                        </div>
                        <div class="info">
                            <div class="meta mb-3">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d M Y') }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-user"></i> {{ $article->author }}
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fas fa-book"></i> {{ $article->category->name ?? 'Tanpa Kategori' }}
                                    </li>
                                </ul>
                            </div>
                            <h2>{{ $article->title }}</h2>
                            <p class="mt-3">
                                {!! nl2br(e($article->content)) !!}
                            </p>

                            @if ($article->link)
                                <a href="{{ $article->link }}" class="btn btn-primary mt-4" target="_blank">
                                    Lihat Sumber Asli
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Article Detail -->
@endsection
