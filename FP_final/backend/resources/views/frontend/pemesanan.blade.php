<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cobuddy</title>
  <link rel="stylesheet" href="/frontend-css/nav.css">
    <link rel="stylesheet" href="/frontend-css/footer.css">
    <link rel="stylesheet" href="/frontend-css/pemesanan.css">
    <link rel="stylesheet" href="/frontend-css/berita.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    rel="stylesheet" />
</head>
<body>

    @include ('frontend.nav')
    
    <!-- Pemesanan -->
  <div class="container" id="pemesanan">
    <div class="wrapper-judul-pesan">
      <h1>Pemesanan</h1>
      <p>Pilih waktu, tujuan, dan jenis kendaraan yang ingin digunakan. Nikmati perjalanan anda senyaman mungkin!</p>
    </div>

    <div class="wrapper-form-pesan">
      <h5>Informasi Pemesanan</h5>
      <form action="{{ route('pesanForm.store') }}" method="POST">
        @csrf
        <div class="row row-cols-2">
        <div class="col">
          <label for="nama-lengkap">Nama Lengkap</label>
          <br />
          <div class="input-group mb-3">
            <input name="nama" id="nama-lengkap" type="text" class="form-control @error('nama')is-invalid @enderror" placeholder="Masukkan Nama Anda" />
            @error('nama')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="col">
          <label for="alamat-email">Alamat Email</label>
          <br />
          <div class="input-group mb-3">
            <input name="email" id="alamat-email" type="text" class="form-control @error('email')is-invalid @enderror" placeholder="Masukkan Email Anda" />
            @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>
      <div class="row row-cols-2">
        <div class="col">
          <label for="alamat-rumah">Alamat Rumah</label>
          <br />
          <div class="input-group mb-3">
            <input name="alamat" id="alamat-rumah" type="text" class="form-control @error('alamat')is-invalid @enderror" placeholder="Masukkan Alamat Anda" />
            @error('alamat')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="col">
          <label for="nomor-telepon">Nomor Telepon Aktif</label>
          <br />
          <div class="input-group mb-3">
            <input name="nomor_hp" id="nomor-telepon" type="text" class="form-control @error('nomor_hp')is-invalid @enderror" placeholder="Masukkan Nomor Anda" />
            @error('nomor_hp')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
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
          <input name="tgl_pinjam" id="hari-pinjam" type="date" class="form-control @error('tgl_pinjam')is-invalid @enderror" />
          @error('tgl_pinjam')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="col">
          <label for="hari-kembali">Hari Kembali</label>
          <br />
          <input name="tgl_kembali" id="hari-kembali" type="date" class="form-control @error('tgl_kembali')is-invalid @enderror" />
          @error('tgl_kembali')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="row row-cols-2">
        <div class="col">
          <label for="jenis-mobil">Jenis Mobil</label>
          <br />
          <select name="mobil" id="jenis-mobil" class="form-select form-select-md mb-3 @error('mobil')is-invalid @enderror">
            <option selected value="" disabled>Pilih Mobil</option>
            <option value="1">Avanza</option>
            <option value="2">Xenia</option>
            <option value="3">Brio</option>
          </select>
          @error('mobil')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
      </div>
      <div class="row">
        <div class="col" id="kolom-button">
          <button type="submit" class="btn btn-success" id="submit-btn">Pesan</button>
        </div>
      </div>
      </form> 
    </div>  
  </div>
  <!-- Pemesanan END -->

  @include('frontend.berita')
  @include ('frontend.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
