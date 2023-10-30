<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Karyamulya</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/aa.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Karyamulya。</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link" href="/blog">Publikasi</a></li>
                    <li class="dropdown"><a href="#"><span>Informasi Desa</span> <i
                        class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/profile">Geografis Desa</a></li>
                            <li><a href="/visi-misi">Visi & Misi</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                @foreach ($posts as $post)
                    <div class="carousel-item active" style=" background-image: url({{ asset('storage/'. $post->poster) }}); background-size: cover;">
                        <div class="carousel-container">
                            <div class="container text-white">
                                <h2 class="animate__animated animate__fadeInDown">{{ $post->judul }}</h2>
                                <p class="animate__animated animate__fadeInUp">{!! $post->excerpt !!}</p>
                                <a href="/blog/{{ $post->slug }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="section-title">
                    <h2>Profil</h2>
                </div>
                <div class="row d-flex align-items-stretch">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="/assets/img/kantor_desa.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Desa Karyamulya.</h3>
                        <p class="fst">
                            Karyamulya merupakan sebuah desa yang terletak dalam (daerah) kecamatan Batujaya, Kabupaten
                            Karawang, Provinsi Jawa Barat, Indonesia. Memiliki luas desa kurang lebih sekitar 4.55
                            m<sup>2</sup> dengan jumlah penduduk mencapai sekitar kurang lebih 10.000 orang.
                        </p>
                        <p>
                            Terdapat 10 buah desa di dalam daerah kecamatan Batujaya :
                        </p>
                        <ul>
                            <li>Desa Kutaampel</li>
                            <li>Desa Karyamakmur</li>
                            <li style="font-weight: bold">Desa Karyamulya</li>
                            <li>Desa Telukbango</li>
                            <li>Desa Telukambulu</li>
                            <li>Desa Karyabakti</li>
                            <li>Desa Baturaden</li>
                            <li>Desa Batujaya</li>
                            <li>Desa Segaran</li>
                            <li>Desa Segarjaya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Apabila ada yang anda ingin ditanyakan mengenai desa Karyamulya bisa isi form dibawah ini
                        Terimakasih <i class="bi bi-emoji-smile"></i></p>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi :</h4>
                                <p>Kec. Batujaya, Karawang, Jawa Barat</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email :</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>No. Telpon :</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-person-workspace"></i>
                                <h4>Jadwal kerja</h4>
                                <p>Senin-Jum'at : 08.00 - 15.00</p>
                            </div>
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15869.446557931962!2d107.20746334912597!3d-6.0818788712742275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a2a34c28ce959%3A0xc36107c6756fc908!2sKaryamulya%2C%20Kec.%20Batujaya%2C%20Karawang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1695441834964!5m2!1sid!2sid allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"
                                style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('send.mail') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama Anda</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Email Anda</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subjek</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                                @error('subject')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Pesan</label>
                                <textarea class="form-control" name="message" rows="10" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Karyamulya。</h3>
            <div class="copyright">
                &copy; Copyright <strong><span>Karyamulya。</span></strong> All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://www.instagram.com/kkn2023.karyamulya1/">KKN Karyamulya 2023</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
