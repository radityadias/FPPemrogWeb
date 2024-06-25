<!-- <script setup>
    import myHeader from '../components/myHeader.vue'
    import myFooter from '../components/myFooter.vue'
</script> -->

<template>
    <!-- <myHeader/> -->

    <!-- Pemesanan -->
  <div class="container" id="pemesanan">
    <div class="wrapper-judul-pesan">
      <h1>Pemesanan</h1>
      <p>Pilih waktu, tujuan, dan jenis kendaraan yang ingin digunakan. Nikmati perjalanan anda senyaman mungkin!</p>
    </div>

    <div class="wrapper-form-pesan">
      <h5>Informasi Pemesanan</h5>
      <div class="row row-cols-2">
        <div class="col">
          <label for="nama-lengkap">Nama Lengkap</label>
          <br />
          <div class="input-group mb-3">
            <input id="nama-lengkap" type="text" class="form-control" placeholder="Masukkan Nama Anda" />
          </div>
        </div>

        <div class="col">
          <label for="alamat-email">Alamat Email</label>
          <br />
          <div class="input-group mb-3">
            <input id="alamat-email" type="text" class="form-control" placeholder="Masukkan Email Anda" />
          </div>
        </div>
      </div>
      <div class="row row-cols-2">
        <div class="col">
          <label for="alamat-rumah">Alamat Rumah</label>
          <br />
          <div class="input-group mb-3">
            <input id="alamat-rumah" type="text" class="form-control" placeholder="Masukkan Alamat Anda" />
          </div>
        </div>
        <div class="col">
          <label for="nomor-telepon">Nomor Telepon Aktif</label>
          <br />
          <div class="input-group mb-3">
            <input id="nomor-telepon" type="text" class="form-control" placeholder="Masukkan Nomor Anda" />
          </div>
        </div>
      </div>
      <div class="row">
        <br />
      </div>
      <h5>Detail Pemesanan</h5>
      <div class="row row-cols-2">
        <div class="col">
          <label for="hari-pinjam">Hari Pinjam</label>
          <br />
          <input id="hari-pinjam" type="date" class="form-control" />
        </div>
        <div class="col">
          <label for="hari-kembali">Hari Kembali</label>
          <br />
          <input id="hari-kembali" type="date" class="form-control" />
        </div>
      </div>
      <div class="row row-cols-2">
        <div class="col">
          <label for="jenis-mobil">Jenis Mobil</label>
          <br />
          <select id="jenis-mobil" class="form-select form-select-md mb-3">
            <option selected>-</option>
            <option value="1">Avanza</option>
            <option value="2">Xenia</option>
            <option value="3">Brio</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col" id="kolom-button">
          <button type="button" class="btn btn-secondary" id="submit-btn">Pesan</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Pemesanan END -->

  <div class="container" id="berita">
    <div class="wrapper-judul-berita">
      <h2>Rekomendasi Perjalanan</h2>
    </div>
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

    <!-- <myFooter/> -->
</template>

<style scoped>
/* Form Pemesanan*/
.wrapper-form-pesan .row {
  margin-top: 20px;
}

.wrapper-form-pesan .col {
  text-align: left;
}

#pemesanan {
  margin-top: 80px;
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.125);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.wrapper-judul-pesan {
  padding: 10px;
  text-align: center;
}

.wrapper-form-pesan {
  padding: 10px;
  text-align: left;
  margin-top: 35px;
}

.input-group {
  margin-top: 5px;
}

.form-select {
  margin-top: 5px;
}

.btn {
  border-radius: 50px;
  width: 200px;
  background-color: #007bff;
  color: #fff;
  border: none;
  cursor: pointer;
}

#kolom-button {
  text-align: center;
  margin-bottom: 25px;
}

.btn:hover {
  background-color: #0056b3;
}

.btn:active {
  background-color: #004080;
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
  margin-top: 80px;
  /* padding: 20px; */
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

.wrapper-judul-berita {
  padding: 25px;
  margin-bottom: 10px;
}
</style>