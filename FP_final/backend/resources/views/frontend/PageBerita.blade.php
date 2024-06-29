<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Mau ke Jogja? Ke sini aja!!</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-3" id="baris-berita">
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-3" id="baris-berita">
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="../../img/Destinasi1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
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