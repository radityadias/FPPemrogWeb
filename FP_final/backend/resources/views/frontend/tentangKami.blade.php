<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cobuddy</title>
    <link rel="stylesheet" href="/frontend-css/nav.css">
    <link rel="stylesheet" href="/frontend-css/footer.css">
    <link rel="stylesheet" href="/frontend-css/tentangKami.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    rel="stylesheet" />
</head>
<body>
  @include('frontend.nav')

      <!-- content test (DELLETE This optional)-->
  <!-- INTRO -->
  <div class="container" id="con-tentangKami">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" style="max-width: 500px; background-color: #f6f6f6; border-radius: 10px; padding: 20px;">
          <h2 class="text-center">Solusi Transportasi Terbaik dan Terjamin Demi Kenyamanan Anda Berkendara</h2>
          <br />
          <div style="margin-bottom: 20px;">
            <h3>Selamat datang di rental mobil kami.</h3>
            <p class="text-secondary">
              Kami menyediakan berbagai jenis mobil yang dapat Anda sewa untuk tujuan penting Anda.
              Kami memberikan pelayanan yang memuaskan, mobil yang terawat, dan harga yang
              kompetitif. Kami mengutamakan kepuasan pelanggan dan berkomitmen untuk memberikan
              pengalaman yang tidak dapat diragukan lagi.
            </p>
          </div>
          <hr />
          <div>
            <h3>Kenapa Memilih Kami?</h3>
            <p class="text-secondary">
              Kami menyediakan berbagai jenis mobil yang dilengkapi dengan fitur canggih seperti air
              conditioner, remote lock, dan sistem navigasi. Kami juga menawarkan pengembalian mobil
              gratis jika Anda melewati batas kedalaman air maksimal. Setiap mobil kami dilengkapi
              dengan dokumen yang lengkap dan dikemas dengan hati-hati. Kami juga menawarkan layanan
              asuransi untuk membantu Anda melindungi aset Anda.
            </p>
          </div>
        </div>
        <div class="wrapper-us-flex">
          <div class="animasi">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script><dotlottie-player src="https://lottie.host/950c1bd0-a720-4e8f-9627-9a4bad44677c/4NdmjWoimk.json" background="transparent" speed="1" style="width: 500px; height: 500px" direction="1" playMode="normal" loop autoplay></dotlottie-player>        </div>

          </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #f6f6f6;">
      <div class="row">
        <div id="values" class="wrapper-us-flex">
          <img src="../../img/visi_misi.png" alt="" />
        </div>
        <div class="col-sm-8">
          <h2>VISI dan MISI</h2>
          <br />
          <p>
            <strong>VISI:</strong> Menjadi perusahaan rental mobil yang terpercaya, terkemuka, dan
            maju di industri rental mobil di Jawa Barat. Kami berkomitmen untuk memberikan pelayanan
            yang memuaskan kepada pelanggan dengan mobil yang berkualitas dan harga yang kompetitif.
          </p>
          <br />
          <p>
            <strong>MISI:</strong> Untuk mengembangkan dan memperluas jangkauan layanan rental
            mobil, melalui strategi yang inovatif, berorientasi pada kepuasan pelanggan, dan
            memberikan layanan yang terjangkau dan berkualitas. Kami juga berkomitmen untuk menjaga
            dan meningkatkan kualitas dan kelengkapan dokumen mobil yang kami sediakan bagi
            pelanggan.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- INTRO END -->
  <!-- Container (Members) -->
  <div class="container mb-5" id="con-anggota">
    <div id="Anggota" class="container-fluid text-center">
        <h2>Anggota</h2>
        <br />
        <h4>Berpartisipasi dalam Pengembangan Web</h4>
        <br />
        <div class="row slideanim ">
            <div class="col-sm-4">
                <div class="profile">
                    <img src="../../img/ppboy.png" alt="Profile Icon" class="profile-icon"/>
                    <h4>Muhammad Raditya Nur Aziz</h4>
                    <p>22.11.4733</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="profile">
                    <img src="../../img/ppboy.png" alt="Profile Icon" class="profile-icon"/>
                    <h4>Tigor Neilson Sinaga</h4>
                    <p>22.11.4725</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="profile">
                    <img src="../../img/ppboy.png" alt="Profile Icon" class="profile-icon"/>
                    <h4>Taufiq Kurniawan Akbar</h4>
                    <p>22.11.4719</p>
                </div>
            </div>
        </div>
        <br /><br />
        <div class="row slideanim">
            <div class="col-sm-4">
                <div class="profile">
                    <img src="../../img/ppboy.png" alt="Profile Icon" class="profile-icon"/>
                    <h4>Muhammad Azhar Firdaus</h4>
                    <p>22.11.4695</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="profile">
                    <img src="../../img/ppboy.png" alt="Profile Icon" class="profile-icon"/>
                    <h4>Alvin Haris Suherdi</h4>
                    <p>22.11.4711</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="profile">
                    <img src="../../img/ppboy.png" alt="Profile Icon" class="profile-icon"/>
                    <h4>Moh.Figriaone.T.Hi Noor</h4>
                    <p>22.11.4694</p>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Members END -->
  <!-- Content test END-->

  @include('frontend.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>
