<!-- <script setup>
    import myHeader from '../components/myHeader.vue'
    import myFooter from '../components/myFooter.vue'
</script> -->

<template>
    <!-- <myHeader/> -->

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
  <!-- Image Slider END-->

  <!-- Form Controls -->
  <div class="container" id="judul-form">
    <div class="wrapper-judul-form">
      <h2>Tentukan Perjanan Anda</h2>
    </div>
  </div>
  <div class="container text-center" id="con-form">
    <div class="row" id="formControl">
      <!-- First column -->
      <div class="col">
        <label for="pilihKota" class="form-label">Kota Sewa : </label>
        <select class="form-select" aria-label="Default select example" id="pilih-kota" placeholder="name@example.com">
          <option selected>Pilih Kota</option>
          <option value="1">Yogyakarta</option>
          <option value="2">Solo</option>
          <option value="3">Jakarta</option>
          <option value="3">Semarang</option>
          <option value="3">Bandung</option>
          <option value="3">Bali</option>
        </select>
      </div>
      <!-- Second column with date picker -->
      <div class="col">
        <form>
          <div class="mb-3">
            <label for="datePicker" id="pilih-tanggal" class="form-label">Pilih Tanggal : </label>
            <input type="date" id="datePicker" class="form-control" />
          </div>
        </form>
      </div>
      <!-- Third column with select menus -->
      <div class="col">
        <label for="durasiSewa" class="form-label">Durasi Sewa : </label>
        <select class="form-select" id="durasi-sewa" aria-label="Default select example">
          <option value="1">1 Hari</option>
          <option value="2">2 Hari</option>
          <option value="3">3 Hari</option>
          <option value="3">4 Hari</option>
          <option value="3">5 Hari</option>
        </select>
      </div>
      <!-- Fourth column with another select menu -->
      <div class="col">
        <label for="pilihDurasi" class="form-label">Jam Mulai : </label>
        <select class="form-select" id="pilih-jam" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">05:00</option>
          <option value="2">06:00</option>
          <option value="3">07:00</option>
          <option value="3">08:00</option>
          <option value="3">09:00</option>
        </select>
      </div>
      <div class="row">
        <div class="col" id="last-col">
          <button type="button" class="btn btn-secondary" id="submit-btn">Pesan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Form Controls END-->

  <!-- Konten -->
  <div class="container" id="judul">
    <div class="wrapper-judul">
      <div class="container">
        <h1><b>SOLUSI TERBAIK MENEMANI PERJALANAN ANDA</b></h1>
        <p>Kami mengerti bahwa setiap orang memiliki kebutuhan transportasi yang beragam. Karena itu kami menawarkan
          layanan sewa berbahai kendaraan sebagai solusi untuk memenuhi kebutuhan transportasi kalian</p>
      </div>
    </div>
  </div>

  <div class="container" id="rekomendasi">
    <div class="wrapper-daftar">
      <div class="container">
        <h2>Daftar Mobil</h2>
      </div>
    </div>
  </div>

   <div class="container" id="card">
    <div class="wrapper-card">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="../../img/mobil3.jpg" class="card-img-top" alt="Avanza 2015" />
            <div class="card-body">
              <h6>Avanza 2015</h6>
              <button type="button" class="btn btn-outline-primary">Cek Mobil</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="../../img/mobil3.jpg" class="card-img-top" alt="Toyota 2025" />
            <div class="card-body">
              <h6>Toyota 2025</h6>
              <button type="button" class="btn btn-outline-primary">Cek Mobil</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="../../img/mobil3.jpg" class="card-img-top" alt="Mitsubishi 2021" />
            <div class="card-body">
              <h6>Mitsubishi 2021</h6>
              <button type="button" class="btn btn-outline-primary">Cek Mobil</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="../../img/mobil4.jpg" class="card-img-top" alt="AGIA 2020" />
            <div class="card-body">
              <h6>AGIA 2020</h6>
              <button type="button" class="btn btn-outline-primary">Cek Mobil</button>
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
      <img src="../../public/img/About.png" alt="" />
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
              <h3>Kualitas Terjamin</h3>
              <h6>aSetiap mobil yang kami sediakan sudah di periksa dan di jamin aman dan layak untuk berkendara.</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tentang Kami END -->

  <!-- Berita -->
  <div class="container" id="judul-berita">
    <div class="wrapper-judul-berita">
      <div class="container">
        <h1>Berita & Informasi</h1>
        <p>Ketahui informasi tempat yang kece abis dan berita yang bermanfaat melalui artikel-artikel kami</p>
      </div>
    </div>
  </div>

  <div class="container" id="berita">
    <div class="wrapper-berita">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="#" class="link-berita">
              <div class="card">
                <img src="../../img/Destinasi1.jpg" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Kaliurang Yogyakarta</h5>
                  <p>Yogyakarta Berada di Jawa Tengah</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="#" class="link-berita">
              <div class="card">
                <img src="../../img/Destinasi2.jpeg" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Tlogo Putri Kaliurang</h5>
                  <p>Yogyakarta Berada di Jawa Tengah</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="#" class="link-berita">
              <div class="card">
                <img src="../../img/Destinasi3.jpg" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Alun-alun Kidul</h5>
                  <p>Yogyakarta Berada di Jawa Tengah</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="#" class="link-berita">
              <div class="card">
                <img src="../../img/Destinasi4.jpeg" class="card-img-active" alt="..." />
                <div class="card-body">
                  <h5>Bukit Bintang</h5>
                  <p>Yogyakarta Berada di Jawa Tengah</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Berita END-->

    <!-- <myFooter/> -->
</template>

<style scoped>
.carousel {
  width: 80%; /* Maksimum lebar carousel */
  height: auto;
  margin: auto;
  position: relative;
  overflow: hidden;
}

.carousel-inner {
  border-radius: 15px;
  overflow: hidden;
  margin-top: 80px;
  position: relative;
}

.carousel-item {
  text-align: center;
  position: relative;
}

.carousel-item img {
  width: auto;
  border-radius: 15px;
  max-height: 500px;
  transition: transform 0.8s ease;
}

/* .carousel-caption {
  opacity: 0;
  transition: 0.8s;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 0 0 15px 15px;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 10px;
  color: #fff;
} */

/* .carousel-item:hover img {
  transform: scale(1.1); /* Perbesar gambar saat cursor di atasnya 
} */

.carousel-item:hover .carousel-caption {
  opacity: 1;
}

/* Tambahkan animasi untuk menampilkan caption */
.carousel-caption {
  transform: translateY(100%); /* Sembunyikan caption di bawah */
}

.carousel-item:hover .carousel-caption {
  transform: translateY(0); /* Tampilkan caption saat hover */
}

#searchForm {
  display: none;
}

/* Form Control*/

#judul-form
{
  padding: 10px;
  margin-top: 35px;
  margin-bottom: -30px
}

#con-form {
  padding: 10px;
  padding-left: 20px;
  border: 1px solid black;
  max-width: 1300px;
  margin-top: 25px;
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.125);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.col {
  padding: 5px;
  margin-top: 10px;
  height: auto;
}

#formControl .col {
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 15px;
  margin: 10px;
  margin-top: 15px;
}

#formControl select.form-select {
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.125);
  padding: 10px;
}

#formControl .row > .col#last-col {
  border: none;
  box-shadow: none;
}

#formControl input.form-control {
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.125);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 10px;
}

#submit-btn {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
}

#submit-btn:hover {
  background-color: #0056b3;
}

#judul h2 {
  margin-bottom: 30px;
}

/* Card styles */
#card .card {
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s;
}

#card .card:hover {
  transform: translateY(-10px);
}

#card .card-body h6 {
  font-size: 1.2em;
  font-weight: bold;
}

#card .btn-outline-primary {
  border-radius: 20px;
  padding: 5px 15px;
}

/* Tentang Kami*/
#about-us {
  margin-bottom: 30px;
}

#tentang-kami {
  display: flex;
  padding: 10px;
  align-items: stretch;
  margin-bottom: 90px;
  border-radius: 20px;
  background-color: rgba(128, 128, 128, 0.197);
}

#tentang-kami img{
  width: 100%;
}

#tentang-kami .row{
  padding: 15px ;
  margin-bottom: 20px;
}

.wrapper-us-flex,
.wrapper-about-flex {
  flex: 1;
  padding: 10px;
  box-sizing: border-box;
}

.wrapper-us-flex img {
  width: 75%;
  border-radius: 40px;
}

#card-about {
  align-items: center;
  text-align: center;
  border: none;
  background-color: rgba(128, 128, 128, 0);
}

#card-about img {
  width: 40%;
}

/* Berita */
#judul-berita {
  margin-top: 90px;
  margin-bottom: -30px;
}

.wrapper-judul-berita .container {
  text-align: left;
  margin-top: 25px;
}

#berita {
  padding: 20px;
  margin-bottom: 90px;
}

#berita .card-body {
  text-align: left;
  margin-top: 5px;
  height: 100px;
  overflow: hidden;
}

.link-berita {
  text-decoration: none;
}

#berita .col:hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
  transform: translateY(-2px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

#berita h5:hover {
  color: rgb(0, 191, 255);
}

#berita .card-img-active {
  margin-left: 15px;
}

#berita img {
  width: 90%;
  max-height: 1000px;
  border-radius: 10px;
}

#berita .card {
  border: none;
  overflow: hidden;
}
</style>