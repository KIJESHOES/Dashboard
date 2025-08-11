@extends('layouts.app')

@section('title', 'Obat - BPOM Bogor')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>Obat</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="active">Obat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog -->
    <div class="blog-area full-width bg-gray default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    @forelse ($articles as $article)
                        <div class="col-lg-6 col-md-6 single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('detail', $article->id) }}">
                                        <img src="{{ asset('assets/img/blog/placeholder.jpg') }}" alt="Thumb" />
                                        <div class="post-type">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <h4>
                                        <a href="{{ route('detail', $article->id) }}">
                                            {{ $article->title }}
                                        </a>
                                    </h4>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d M, Y') }}</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> {{ $article->author }}</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-book"></i> {{ $article->category->name ?? 'Tanpa Kategori' }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        {{ Str::limit($article->content, 150) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Belum ada artikel tersedia.</p>
                        </div>
                    @endforelse

                    <div class="col-lg-12 col-md-12 pagi-area">
                        {{ $articles->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
