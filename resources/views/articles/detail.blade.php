@extends('layouts.app')

@section('title', $article->title . ' - BPOM Bogor')

@section('content')

    @php
        // Fungsi untuk ambil link preview dari Google Drive
        function getDrivePreviewUrl($url) {
            if (preg_match('/\/file\/d\/([^\/]+)\//', $url, $matches)) {
                return 'https://drive.google.com/file/d/' . $matches[1] . '/preview';
            }
            return null;
        }

        $drivePreview = $article->link ? getDrivePreviewUrl($article->link) : null;

        // Hitung jumlah pengunjung artikel ini (langsung di view, meskipun idealnya di controller)
        $articleVisitors = \App\Models\Visit::where('page_type', 'article')
            ->where('page_id', $article->id)
            ->count();
    @endphp

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url({{ asset('assets/img/banner/1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <h1>{{ $article->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>
                            <a href="{{ route('articles.byCategory', $article->category->name) }}">
                                {{ $article->category->name }}
                            </a>
                        </li>
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
                        <div class="info">
                            <!-- Meta -->
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
                                    <li class="list-inline-item">
                                        <i class="fas fa-eye"></i> Dilihat {{ $articleVisitors }} kali
                                    </li>
                                </ul>
                            </div>

                            <!-- Title -->
                            <h2>{{ $article->title }}</h2>

                            <!-- File Preview -->
                            @if ($drivePreview)
                                {{-- Preview dari Google Drive (PDF, PPTX, DOCX, dll) --}}
                                <iframe src="{{ $drivePreview }}" width="100%" height="600" style="border:none;" allow="autoplay"></iframe>
                            @elseif ($article->link && Str::endsWith($article->link, '.pdf'))
                                {{-- Preview PDF biasa --}}
                                <iframe src="{{ $article->link }}" width="100%" height="600" style="border:none;"></iframe>
                            @endif

                            <!-- Content -->
                            <p class="mt-3">{!! nl2br(e($article->content)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
