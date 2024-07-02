<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cobuddy</title>

    <link rel="stylesheet" href="frontend-css/nav.css">
    <link rel="stylesheet" href="frontend-css/footer.css">
    <link rel="stylesheet" href="frontend-css/PageBerita.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet" />
</head>
<body>

    @include('frontend.nav')

    <div class="container" id="con-berita">
    <div class="wrapper-judul">
      <h1>Informasi Destinasi Wisata Yang Menarik Dari Kami</h1>
      <br />
      <p>
        Dapatkan informasi terbaru mengenai sewa kendaraan ataupun berita terkini mengenai tempat
        pariwisata menarik yang wajib Anda kunjungi
      </p>
    </div>
    <div class="wrapper-berita">
      <div class="row row-cols-3" id="baris-berita">
        <div class="col">
          <div class="card">
            <img src="../../img/JalanMalioboro.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Jalan Malioboro Yogyakarta</h5>
              <p class="card-text">
                Nikmati suasana ikonik di Jalan Malioboro, pusat perbelanjaan dan kuliner khas Jogja yang penuh dengan keramaian dan budaya lokal.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/KratonJogja.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Kraton Jogja</h5>
              <p class="card-text">
                Jelajahi keindahan dan sejarah Kraton Jogja, istana resmi Kesultanan Yogyakarta yang masih aktif dan menyimpan banyak peninggalan berharga.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Alun-alunSelatan.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Alun-alunSelatan</h5>
              <p class="card-text">
                Rasakan suasana santai di Alun-alun Selatan, tempat favorit untuk menikmati malam dengan kereta kencana berlampu dan jajanan tradisional.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-3" id="baris-berita">
        <div class="col">
          <div class="card">
            <img src="../../img/Pantai_Nglambor.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Pantai Nglambor</h5>
              <p class="card-text">
                Kagumi keindahan arsitektur Candi Prambanan, kompleks candi Hindu terbesar di Indonesia dengan cerita epik Ramayana.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/CandiPrambanan.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Candi Prambanan</h5>
              <p class="card-text">
                Jelajahi keindahan bawah laut di Pantai Nglambor, surga snorkeling dengan terumbu karang yang menakjubkan dan berbagai jenis ikan yang berwarna-warni.

              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Waduk_sermo.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Waduk Sermo</h5>
              <p class="card-text">
                Nikmati ketenangan dan keindahan Waduk Sermo, tempat yang sempurna untuk berkemah, memancing, atau sekadar menikmati pemandangan alam yang asri.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-3" id="baris-berita">
        <div class="col">
          <div class="card">
            <img src="../../img/PantaiParangtritis.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Pantai Parang Tritis</h5>
              <p class="card-text">
                Jelajahi keindahan pesisir selatan Jawa yang memukau dengan pantai-pantai indah, desa-desa nelayan, dan kekayaan budaya lokal yang unik.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/LerengGunungMerapi.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Lereng Gunung Merapi</h5>
              <p class="card-text">
                Saksikan keindahan alam dan petualangan seru di Lereng Gunung Merapi, gunung berapi paling aktif di Indonesia dengan pemandangan spektakuler.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Pesona Pesisir Selatan Jawa</h5>
              <p class="card-text">
                Jelajahi keindahan pesisir selatan Jawa yang memukau dengan pantai-pantai indah, desa-desa nelayan, dan kekayaan budaya lokal yang unik.
              </p>
            </div>
          </div>
        </div>
      </div>
         </div>
    </div>

    @include('frontend.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
