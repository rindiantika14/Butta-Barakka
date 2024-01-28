<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $nama_cv }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    @laravelPWA
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="{{ url('/') }}"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center gap-2 justify-content-center">
                        <img width="50px" style="border-radius: 10px" src="images/icons/icon.png" alt="">
                        <h6 class="m-0 text-primary text-uppercase" style="font-size: 15px">Grand Sulawesi <br>
                            Bontomarannu</h6>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-user text-primary me-2"></i>
                                <p class="mb-0">Adam</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+62 821-9916-1774</p>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="{{ url('/') }}" class="navbar-brand d-block d-lg-none">
                            <h6 class="m-0 text-primary text-uppercase">{{ $nama_perumahan }}</h6>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                                <a href="#about" class="nav-item nav-link">About</a>
                                <a href="#tipe-blok" class="nav-item nav-link">Tipe & Blok</a>
                                <a href="#denah" class="nav-item nav-link">Denah</a>
                                <a href="#fasilitas" class="nav-item nav-link">Fasilitas</a>
                                <a href="#lokasi" class="nav-item nav-link">Lokasi</a>
                            </div>
                            {{-- <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a> --}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                {{-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">{{ $nama_cv }}</h6> --}}
                                <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $nama_perumahan }}</h1>
                                {{-- <a href="{{ route('login') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                {{-- <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">{{ $nama_cv }}</h6> --}}
                                <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $nama_perumahan }}</h1>
                                {{-- <a href="{{ route('login') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login</a> --}}
                                {{-- <a href="{{ route('register') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Sign Up</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Selamat datang di <span
                                class="text-primary text-uppercase">{{ $nama_perumahan }}</span></h1>
                        <p class="mb-4">Tempat di mana untuk mewujudkan impian Anda akan hunian ideal. Di sini, kami
                            menawarkan hunian modern dan memiliki fasilitas perumahan yang lengkap. Lokasi kami yang
                            strategis memastikan akses mudah ke segala kebutuhan sehari-hari.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{ $totalTipe }}</h2>
                                        <p class="mb-0">Tipe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-home fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{ $totalBlok }}</h2>
                                        <p class="mb-0">Blok</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{ $totalVisitor }}</h2>
                                        <p class="mb-0">Visitor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Login Now</a> --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Tipe Start -->
        <div class="container-xxl py-5" id="tipe-blok">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Tipe & Blok Rumah</h6>
                </div>
                <div style="text-align: center">
                </div>
                @foreach ($tipe as $item)
                    <div class="row g-4">
                        <h3 class="mb-2 mt-5">{{ $item->tipe }}</h3>
                        @foreach ($blok[$item->id] as $value)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ url(Storage::url($value->denah)) }}"
                                            alt="">
                                        <div data-bs-toggle="modal" data-bs-target="#kt_modal_1{{ $value->id }}"
                                            style="background-color: #ffffff82; padding: 5px 10px; border-radius: 10px; position: absolute; top: 10px; right: 10px;display: flex; gap: 5px; align-items: center;cursor: pointer;">
                                            <img src="share.png" width="20px" alt="">
                                            <div
                                                style="color: black; margin-top: 2px; font-size: 13px; font-weight: bold; ">
                                                Share</div>
                                        </div>
                                        <small
                                            class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rp
                                            {{ number_format($value->harga, 0, ',', '.') }}</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">{{ $value->nama_blok }}</h5>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i
                                                    class="fa fa-bed text-primary me-2"></i>{{ $value->kamar }}
                                                Kamar</small>
                                            <small class="border-end me-3 pe-3"><i
                                                    class="fa fa-bath text-primary me-2"></i>{{ $value->toilet }}
                                                Toilet</small>
                                            <small><i
                                                    class="fa fa-map text-primary me-2"></i>{{ $value->luas }}</small>
                                        </div>
                                        <p class="text-body mb-3">{{ $value->spesifikasi }}</p>
                                        <div class="d-flex justify-content-between">
                                            @if ($value->status == 'Tersedia')
                                                <span
                                                    class="btn btn-sm btn-info rounded py-2 px-4">{{ $value->status }}</span>
                                            @else
                                                <span
                                                    class="btn btn-sm btn-primary rounded py-2 px-4">{{ $value->status }}</span>
                                            @endif
                                            <a class="btn btn-sm btn-dark rounded py-2 px-4"
                                                href="{{ route('data-blok', $value->id) }}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" tabindex="-1" id="kt_modal_1{{ $value->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Share</h3>

                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-1"></span>
                                            </div>
                                            <!--end::Close-->
                                        </div>

                                        <div class="modal-body d-flex justify-content-center align-items-center gap-5">
                                            @php
                                                $id = $value->id;
                                                $url = "https://butta-barakka-agency.vintech.my.id/data-blok/{$id}";
                                                $urlWhatsApp = "https://wa.me/?text={$url}";
                                            @endphp

                                            <a target="_blank" href="{{ $urlWhatsApp }}">
                                                <div style="display: flex ; align-items: center">
                                                    <img src="logo-wa.png" width="50px" alt="">
                                                    <div>Whatsapp</div>
                                                </div>
                                            </a>
                                            <button onclick="copyToClipboard('{{ $url }}')"
                                                style="border: none; background-color: transparent;"
                                                class="text-primary">
                                                <span style="display: flex; align-items: center;">
                                                    <img src="copy.png" width="32px" alt="">
                                                    <div class="ms-2">Copy Teks</div>
                                                </span>
                                            </button>

                                            <script>
                                                function copyToClipboard(text) {
                                                    navigator.clipboard.writeText(text)
                                                        .then(() => {
                                                            alert('Teks telah disalin ke clipboard: ' + text);
                                                        })
                                                        .catch(err => {
                                                            console.error('Gagal menyalin teks ke clipboard: ', err);
                                                        });
                                                }
                                            </script>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Tipe End -->


        <!-- denah Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s" id="denah">
            <div class="row g-0">
                <div style="text-align: center">
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h1 class="text-white mb-4">Denah Perumahan</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="img/denah.jpeg">
                        <div class="video">

                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- denah Start -->


        <!-- fasilitas Start -->
        <div class="container-xxl py-3" id="fasilitas">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Fasilitas <span class="text-primary text-uppercase">Perumahan</span></h1>
                </div>
                <div style="text-align: center">
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Masjid</h5>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-laptop fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">CCTV 24 Jam</h5>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-street-view fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Taman Bermain</h5>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-home fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Pesantren</h5>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-user-tie fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Pos Security</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- fasilitas End -->

        <div class="container-xxl py-5" id="lokasi">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-5">Lokasi <span class="text-primary text-uppercase">Perumahan</span></h1>
                </div>
                <div style="text-align: center">
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q={{ $nama_perumahan }}&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>
    </div>
    </div>

    <a target="_blank" href="https://wa.me/6282199161774?text=Halo%20Adam%2C%20saya%20tertarik%20untuk%20membeli">
        <div class="animated slideInRight"
            style="position: fixed; bottom: 268px; z-index: 9999; right: 0; background-color: white;border-radius: 10px 0 0 10px; display: flex; align-items: center; padding-right: 10px">
            <img src="logo-wa.png" width="50px" alt="">
            <div style="font-weight: bold">Chat & Dapatkan Brosur</div>
        </div>
    </a>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
