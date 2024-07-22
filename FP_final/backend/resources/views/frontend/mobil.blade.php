<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cobuddy</title>
    <link rel="stylesheet" href="frontend-css/nav.css">
    <link rel="stylesheet" href="frontend-css/footer.css">
    <link rel="stylesheet" href="frontend-css/mobil.css">
    <link rel="stylesheet" href="frontend-css/berita.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    rel="stylesheet" />
</head>
<body>
  @include('frontend.nav')

    <div class="container" id="judul-konten">
    <div class="wrapper-judul-konten">
      <div class="container">
        <h1>Rekomendasi Mobil</h1>
      </div>
    </div>
  </div>
  

  <div class="container" id="konten">
    <div class="wrapper-konten">
      <div class="container">
        <!-- Baris 1 -->
        <div class="row">
            <!-- Kolom 1 -->
            <div class="col">
                <div class="card">
                  <img src="../../img/Daihastu.png" class="card-img-active" alt="..." />
                  <div class="card-body">
                    <h5>Daihastu</h5>
                    <div class="row row-cols-4">
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Tempat Duduk</p>
                        <b>
                          <p style="margin-top: -15px;">4</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bagasi</p>
                        <b>
                          <p style="margin-top: -15px;">Sedang</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bahan Bakar</p>
                        <b>
                          <p style="margin-top: -15px;">Bensin</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Transmisi</p>
                        <b>
                          <p style="margin-top: -15px;">Manual</p>
                        </b>
                      </div>
                    </div>
                  </div>
                </div>
            
            </div>
          <!-- Kolom 2 -->
          <div class="col">
              <div class="card">
                <img src="../../img/briors.png" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Honda Brio</h5>
                  <div class="row row-cols-4">
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Tempat Duduk</p>
                      <b>
                        <p style="margin-top: -15px;">5</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bagasi</p>
                      <b>
                        <p style="margin-top: -15px;">Kecil</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bahan Bakar</p>
                      <b>
                        <p style="margin-top: -15px;">Bensin</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Transmisi</p>
                      <b>
                        <p style="margin-top: -15px;">Manual</p>
                      </b>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- Kolom 3 -->
          <div class="col">
                <div class="card">
                  <img src="../../img/kia seltos.png" class="card-img-active" alt="..." />
                  <div class="card-body">
                    <h5>Kia Seltos</h5>
                    <div class="row row-cols-4">
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Tempat Duduk</p>
                        <b>
                          <p style="margin-top: -15px;">5</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bagasi</p>
                        <b>
                          <p style="margin-top: -15px;">Kecil</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bahan Bakar</p>
                        <b>
                          <p style="margin-top: -15px;">Bensin</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Transmisi</p>
                        <b>
                          <p style="margin-top: -15px;">Otomatis</p>
                        </b>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- Baris 2 -->
        <div class="row">
            <!-- Kolom 1 -->
            <div class="col">
                <div class="card">
                  <img src="../../img/nissan livina.png" class="card-img-active" alt="..." />
                  <div class="card-body">
                    <h5>Nissan Livina</h5>
                    <div class="row row-cols-4">
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Tempat Duduk</p>
                        <b>
                          <p style="margin-top: -15px;">7</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bagasi</p>
                        <b>
                          <p style="margin-top: -15px;">Sedang</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bahan Bakar</p>
                        <b>
                          <p style="margin-top: -15px;">Bensin</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Transmisi</p>
                        <b>
                          <p style="margin-top: -15px;">Otomatis</p>
                        </b>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- Kolom 2 -->
            <div class="col">
                <div class="card">
                  <img src="../../img/misubishi pajero.png" class="card-img-active" alt="..." />
                  <div class="card-body">
                    <h5>Mitsubishi Pajero</h5>
                    <div class="row row-cols-4">
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Tempat Duduk</p>
                        <b>
                          <p style="margin-top: -15px;">7</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bagasi</p>
                        <b>
                          <p style="margin-top: -15px;">Sedang</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Bahan Bakar</p>
                        <b>
                          <p style="margin-top: -15px;">Bensin</p>
                        </b>
                      </div>
                      <div class="col" id="col-logo" style="margin-right: -40px;">
                        <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                      </div>
                      <div class="col" style="margin-right: 0px; width: 110px; ">
                        <p>Transmisi</p>
                        <b>
                          <p style="margin-top: -15px;">Otomatis</p>
                        </b>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Kolom 3 -->
        <div class="col">
            <div class="card">
              <img src="../../img/toyota avanza.png" class="card-img-active" alt="..." />
              <div class="card-body">
                <h5>Toyota</h5>
                <div class="row row-cols-4">
                  <div class="col" id="col-logo" style="margin-right: -40px;">
                    <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                  </div>
                  <div class="col" style="margin-right: 0px; width: 110px; ">
                    <p>Tempat Duduk</p>
                    <b>
                      <p style="margin-top: -15px;">7</p>
                    </b>
                  </div>
                  <div class="col" id="col-logo" style="margin-right: -40px;">
                    <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                  </div>
                  <div class="col" style="margin-right: 0px; width: 110px; ">
                    <p>Bagasi</p>
                    <b>
                      <p style="margin-top: -15px;">Sedang</p>
                    </b>
                  </div>
                  <div class="col" id="col-logo" style="margin-right: -40px;">
                    <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                  </div>
                  <div class="col" style="margin-right: 0px; width: 110px; ">
                    <p>Bahan Bakar</p>
                    <b>
                      <p style="margin-top: -15px;">Bensin</p>
                    </b>
                  </div>
                  <div class="col" id="col-logo" style="margin-right: -40px;">
                    <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                  </div>
                  <div class="col" style="margin-right: 0px; width: 110px; ">
                    <p>Transmisi</p>
                    <b>
                      <p style="margin-top: -15px;">Otomatis</p>
                    </b>
                  </div>
                </div>
              </div>
            </div>
         </div>
        <!-- Baris 3 -->
        <div class="row">
          <!-- Kolom 1 -->
          <div class="col">
              <div class="card">
                <img src="../../img/suzuki ertiga.png" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Suzuki Ertiga</h5>
                  <div class="row row-cols-4">
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Tempat Duduk</p>
                      <b>
                        <p style="margin-top: -15px;">7</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bagasi</p>
                      <b>
                        <p style="margin-top: -15px;">Sedang</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bahan Bakar</p>
                      <b>
                        <p style="margin-top: -15px;">Bensin</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Transmisi</p>
                      <b>
                        <p style="margin-top: -15px;">Otomatis</p>
                      </b>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- Kolom 2 -->
          <div class="col">
              <div class="card">
                <img src="../../img/briosatya.png" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Honda Brio Satya</h5>
                  <div class="row row-cols-4">
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Tempat Duduk</p>
                      <b>
                        <p style="margin-top: -15px;">5</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bagasi</p>
                      <b>
                        <p style="margin-top: -15px;">Kecil</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bahan Bakar</p>
                      <b>
                        <p style="margin-top: -15px;">Bensin</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Transmisi</p>
                      <b>
                        <p style="margin-top: -15px;">Manual</p>
                      </b>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- Kolom 3-->
          <div class="col">
              <div class="card">
                <img src="../../img/fortuner 5.png" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Toyota Fortuner </h5>
                  <div class="row row-cols-4">
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/car-seat.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Tempat Duduk</p>
                      <b>
                        <p style="margin-top: -15px;">7</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/luggage.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bagasi</p>
                      <b>
                        <p style="margin-top: -15px;">Sedang</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gas-station.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Bahan Bakar</p>
                      <b>
                        <p style="margin-top: -15px;">Bensin</p>
                      </b>
                    </div>
                    <div class="col" id="col-logo" style="margin-right: -40px;">
                      <img src="../../img/gear.png" alt="" style="max-width: 35px; margin-top: 5px;">
                    </div>
                    <div class="col" style="margin-right: 0px; width: 110px; ">
                      <p>Transmisi</p>
                      <b>
                        <p style="margin-top: -15px;">Otomatis</p>
                      </b>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
      </div>
    </div>
  </div>
@include('frontend.berita')
@include('frontend.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>