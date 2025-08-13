{{-- filepath: c:\xampp\htdocs\coba\resources\views\beranda.blade.php --}}
@extends('layouts.app')

@section('title', 'Pojok Literasi - BPOM Bogor')

@section('content')
    <!-- Start Banner
                                                    ============================================= -->
    <div class="banner-area auto-height text-center text-light shadow dark-hard small-text bg-fixed"
        style="background-image: url({{ asset('assets/img/banner/7.jpg') }})">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1>Pojok Literasi <span>Balai</span> POM di BOGOR</h1>
                                    <p>
                                        Pojok Literasi Balai POM Bogor adalah portal edukasi internal yang menyediakan
                                        materi lengkap tentang pengawasan obat, obat tradisional, kosmetik, pangan, suplemen
                                        kesehatan, serta Forum Konsultasi Publik (FKP). Situs ini bertujuan meningkatkan
                                        pemahaman staf dan masyarakat terkait regulasi dan informasi kesehatan demi keamanan
                                        produk yang beredar. Kamu bisa akses info lengkap dan update terpercaya untuk
                                        mendukung tugas pengawasan dan pelayanan di Balai POM.
                                    </p>
                                </div>
                            </div>
                            <div></div>
                            <div class="col-lg-8 offset-lg-2">
                                <div class="banner">
                                    <img src="https://img.youtube.com/vi/06BRlktl1AE/maxresdefault.jpg"
                                        alt="Thumbnail YouTube" />
                                    <div class="overlay">
                                        <a class="popup-youtube video-play-button"
                                            href="https://www.youtube.com/watch?v=06BRlktl1AE">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Features
                                                    ============================================= -->
    <div id="features" class="features-area default-padding bottom-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Informasi Komoditi</h2>
                        <p>
                            Materi lengkap seputar pengawasan obat, obat tradisional, kosmetik, pangan, dan
                            suplemen kesehatan untuk mendukung tugas pengawasan dan pelayanan di Balai POM.
                        </p>
                    </div>
                </div>
            </div>
            <div class="features-items">
                <div class="row">
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-capsules"></i>
                            </div>
                            <div class="info">
                                <h4>Obat</h4>
                                <p>
                                    Materi lengkap seputar regulasi, keamanan, dan pengawasan obat modern untuk melindungi
                                    masyarakat dari produk ilegal dan tidak aman.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mortar-pestle"></i>
                            </div>
                            <div class="info">
                                <h4>Obat Tradisional</h4>
                                <p>
                                    Informasi penting tentang kandungan, manfaat, dan pengawasan obat tradisional agar aman
                                    dikonsumsi dan sesuai standar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <div class="info">
                                <h4>Suplamen Kesehatan</h4>
                                <p>
                                    Panduan pengawasan dan informasi suplemen kesehatan yang beredar agar konsumen mendapat
                                    produk yang berkualitas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <div class="info">
                                <h4>Kosmetik</h4>
                                <p>
                                    Pengetahuan tentang standar kosmetik, bahan berbahaya, dan pengawasan agar produk yang
                                    digunakan aman dan sesuai aturan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-bread-slice"></i>
                            </div>
                            <div class="info">
                                <h4>Pangan</h4>
                                <p>
                                    Edukasi pengawasan pangan mulai dari produksi hingga distribusi untuk menjamin keamanan
                                    dan kualitas pangan yang dikonsumsi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="info">
                                <h4>Materi FKP 2025</h4>
                                <p>
                                    Dokumentasi dan update hasil Forum Konsultasi Publik (FKP) 2025 sebagai referensi
                                    kebijakan dan regulasi terbaru dalam pengawasan produk.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Overview
                                                        ============================================= -->
    <div id="overview" class="overview-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Kegiatan Kami</h2>
                        <p>
                            Balai POM Bogor aktif melakukan pengawasan dan edukasi untuk memastikan keamanan dan kualitas
                            produk yang beredar. Kami juga menyelenggarakan Forum Konsultasi Publik guna mendukung
                            transparansi dan pengembangan kebijakan pengawasan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center overview-items">
                    <div class="overview-carousel owl-carousel owl-theme">
                        <img src="{{ asset('assets/img/app/screnshoot-1.jpg') }}" alt="Thumb" />
                        <img src="{{ asset('assets/img/app/screnshoot-2.jpg') }}" alt="Thumb" />
                        <img src="{{ asset('assets/img/app/screnshoot-3.jpg') }}" alt="Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview -->

    <!-- Start Faq
                                                ============================================= -->
    <div class="faq-area bg-gray default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Informasi Umum</h2>
                        <p>
                            Di sini kamu bisa temukan jawaban atas pertanyaan umum tentang peran, layanan, dan pengawasan
                            produk oleh Balai POM Bogor.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 faq-items default-padding-bottom order-lg-last">
                    <!-- Start Accordion -->
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apa tugas utama Balai POM Bogor?
                                    </button>
                                </div>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Melaksanakan kebijakan teknis operasional di bidang pengawasan obat dan makanan
                                            sesuai dengan peraturan perundang-undangan. Ini mencakup pengawasan terhadap
                                            produksi, distribusi, dan peredaran obat-obatan, makanan, kosmetik, dan produk
                                            kesehatan lainnya di wilayah kerjanya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Bagaimana cara melaporkan produk berisiko atau ilegal?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Lapor langsung ke Balai POM melalui Contact Center HALOBPOM 1500533 atau ke
                                            kantor Balai POM setempat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Apa itu Forum Konsultasi Publik (FKP)?
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="collapseThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Sebuah wadah dialog yang melibatkan penyelenggara layanan publik dan masyarakat
                                            untuk membahas, bertukar pendapat, dan memberikan masukan terkait kebijakan,
                                            pelayanan, atau isu-isu publik lainnya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Bagaimana mendapatkan informasi resmi tentang produk aman?
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="collapseFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            Cek website resmi Balai POM Bogor atau website utama Badan POM untuk info
                                            terbaru dan
                                            terpercaya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
                </div>
                <div class="col-lg-6 thumb">
                    <img src="{{ asset('assets/img/banner/contact.png') }}" alt="Thumb" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->
@endsection
