<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cobuddy</title>
    <link rel="stylesheet" href="/frontend-css/beranda.css">
    <link rel="stylesheet" href="/frontend-css/nav.css">
    <link rel="stylesheet" href="/frontend-css/footer.css">
    <link rel="stylesheet" href="/frontend-css/berita.css">
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet" />
</head>

<body>


    @include ('frontend.nav')
    

    <!-- Image Slider -->
    <div class="carousel slide" id="carouselDemo" data-bs-ride="carousel">
        <div class="carousel-inner">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDemo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDemo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            <div class="carousel-item active">
                <img src="../../img/promo (6).jpg" alt="confuse" />
            </div>
            <div class="carousel-item">
                <img src="../../img/promo (4).jpg" alt="test" />
            </div>
            <div class="carousel-item">
                <img src="../../img/promo (5).jpg" alt="test2" />
            </div>
        </div>
    </div>
    <!-- Image Slider END -->

    <!-- Konten -->
    <div class="container" id="judul">
        <div style="margin-top: 60px" class="wrapper-judul">
            <div class="container">
                <h1><b>Solusi <span class="typing"></span></b></h1>
                <h1><b>Untuk Menemani Perjalanan Anda</b></h1>
                <p>Kami mengerti bahwa setiap orang memiliki kebutuhan transportasi yang beragam. Karena itu kami menawarkan layanan sewa berbagai kendaraan sebagai solusi untuk memenuhi kebutuhan transportasi kalian.
                </p>
            </div>
        </div>
    </div>

    <div class="container" id="rekomendasi-mobil">
        <div class="wrapper-daftar">
            <div class="container">
                <h2 style="margin-top:200px">Daftar Mobil</h2>
            </div>
            
        </div>
    </div>

    <a href="mobil" class="more-link"> Selengkapnya <i class="bi bi-arrow-right"></i></a>


    <div class="container" id="card">
        <div class="wrapper-card">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-80 shadow-sm">
                        <img src="../../img/mobil3.jpg" class="card-img-top" alt="Avanza 2015" />
                        <div class="card-body">
                            <h6>Avanza 2015</h6>
                            <a href="/mobil" class="btn btn-outline-primary">Cek Mobil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-80 shadow-sm">
                        <img src="../../img/mobil4.jpg" class="card-img-top" alt="Toyota 2025" />
                        <div class="card-body">
                            <h6>Honda 2025</h6>
                            <a href="/mobil" class="btn btn-outline-primary">Cek Mobil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-80 shadow-sm">
                        <img src="../../img/mobil7.jpg" class="card-img-top" alt="Mitsubishi 2021" />
                        <div class="card-body">
                            <h6>KIA 2021</h6>
                            <a href="/mobil" class="btn btn-outline-primary">Cek Mobil</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-80 shadow-sm">
                        <img src="../../img/mobil5.jpeg" class="card-img-top" alt="AGIA 2020" />
                        <div class="card-body">
                            <h6>AGIA 2020</h6>
                            <a href="/mobil" class="btn btn-outline-primary">Cek Mobil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Konten END -->

    <!-- Tentang Kami -->
    <div class="container text-center" id="about-us">
        <div class="wrapper-daftar">
            <div class="container">
                <h2>Tentang Kami</h2>
            </div>
        </div>
    </div>
    <div class="container" id="tentang-kami">
        <div class="wrapper-us-flex">
            <img src="/img/About.png" alt="" />
        </div>
        <div class="wrapper-about-flex">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem" id="card-about">
                        <img src="../../img/tentang.png" class="card-img-active" alt="..." />
                        <div class="card-body">
                            <h3>Our Team</h3>
                            <h6>Team kami dibentuk saat ada tugas Pemrograman WEB</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem" id="card-about">
                        <img src="../../img/sekuritas.png" class="card-img-active" alt="..." />
                        <div class="card-body">
                            <h3>Di Jamin Aman</h3>
                            <h6>Segala bentuk transaksi yang kamu lakukan, di jamin aman!</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem" id="card-about">
                        <img src="../../img/terjangkau.png" class="card-img-active" alt="..." />
                        <div class="card-body">
                            <h3>Terjangkau</h3>
                            <h6>Gak perlu ragu lagi mau jalan-jalan tanpa keluar banyak duit.</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem" id="card-about">
                        <img src="../../img/kualitas.png" class="card-img-active" alt="..." />
                        <div class="card-body">
                            <h3>Kualitas Terjamin</h6>
                                <h6>Setiap mobil yang kami sediakan sudah di periksa dan di jamin aman dan layak untuk
                                    berkendara.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Kami END -->

    @include('frontend.berita')

    @include('frontend.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    var typed = new Typed(".typing", {
    strings: ["Terbaik", "Termurah", "Terpercaya"],
    typeSpeed: 150,
    backSpeed: 100,
    loop: true,
  });
    </script>
</body>

</html>
