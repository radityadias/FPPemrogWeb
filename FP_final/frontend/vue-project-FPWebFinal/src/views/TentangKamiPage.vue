<template>
<!-- content test (DELLETE This optional)-->
    <!-- INTRO -->
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>About Company Page</h2><br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia
                        deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                    <br><button class="btn btn-default btn-lg">TEST BUTTON</button>
                </div>
                <div class="wrapper-us-flex">
                    <img src="../../img/Vehicle.png" alt="" />
                </div>
            </div>
        </div>

        <div class="container-fluid bg-values">
            <div class="row">
                <div id="values" class="wrapper-us-flex">
                    <img src="../../img/Vehicle.png" alt="" />
                </div>
                <div class="col-sm-8">
                    <h2>VISI dan MISI</h2><br>
                    <p><strong>VISI:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
                    <p><strong>MISI:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit
                        amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- INTRO END -->
    <!-- Container (Members) -->
    <div class="container">
        <div id="Anggota" class="container-fluid text-center">
            <h2>Anggota</h2>
            <br>
            <h4>Berpartisipasi dalam Pengembangan Web</h4>
            <br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <div id="profile" class="wrapper-us-flex">
                        <img src="../../img/Vehicle.png" alt="" />
                    </div>
                    <h4>Muhammad Raditya Nur Aziz</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <div id="profile" class="wrapper-us-flex">
                        <img src="../../img/Vehicle.png" alt="" />
                    </div>
                    <h4>Tigor Neilson Sinaga</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <div id="profile" class="wrapper-us-flex">
                        <img src="../../img/Vehicle.png" alt="" />
                    </div>
                    <h4>Taufiq Kurniawan Akbar</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
            <br><br>
            <div class="row slideanim">
                <div class="col-sm-4">
                    <div id="profile" class="wrapper-us-flex">
                        <img src="../../img/Vehicle.png" alt="" />
                    </div>
                    <h4>Muhammad Azhar Firdaus</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <div id="profile" class="wrapper-us-flex">
                        <img src="../../img/Vehicle.png" alt="" />
                    </div>
                    <h4>Alvin Haris Suherdi</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
                <div class="col-sm-4">
                    <div id="profile" class="wrapper-us-flex">
                        <img src="../../img/Vehicle.png" alt="" />
                    </div>
                    <h4>Moh.Figriaone.T.Hi Noor</h4>
                    <p>Lorem ipsum dolor sit amet..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Members END -->
    <!-- Content test END-->
</template>

<style scoped>
/* TEST (DELETE this optional) */
  .container-fluid {
    padding: 60px 50px;
  }

    .bg-values {
    background-color: #f6f6f6;
    border-radius: 15px;
  }

/* Aturan gaya untuk layar dengan lebar maksimum 768px (ukuran tablet dan di bawahnya) */
@media screen and (max-width: 768px) {
  .container-fluid {
    padding: 30px; /* Misalnya, mengurangi padding untuk layar kecil */
  }
}

/* Aturan gaya untuk layar dengan lebar maksimum 480px (ukuran ponsel dan di bawahnya) */
@media screen and (max-width: 480px) {
  .container-fluid {
    padding: 15px; /* Misalnya, mengurangi padding lebih banyak untuk layar sangat kecil */
  }
}

#profile img {
    width: 150px; /* Lebar gambar */
    height: 150px; /* Tinggi gambar */
    object-fit: cover; /* Untuk menjaga aspek gambar */
}

/* TEST END */


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

/* Footer */

#con-footer {
  position: relative;
  margin-top: 20px;
  background-color: rgb(33 37 41);
}

.wrapper-footer {
  padding: 15px;
}

.wrapper-footer .col {
  text-align: center;
  /* border: 1px solid black; */
  padding: 5px;
}

#footer-judul {
  padding: 10px;
  margin-bottom: 5px;
  color: yellow;
}

#isi-footer,
hr {
  color: white;
}
</style>