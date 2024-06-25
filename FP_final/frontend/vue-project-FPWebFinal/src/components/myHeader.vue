<script setup>
    import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
    <header>
    <nav class="navbar navbar-expand bg-dark text-white pt-1 pb-1">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logo" src="../../img/logo 2.png" alt="cobuddy" srcset="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="home-Page.html" style="color: white">Beranda</a> -->
               <RouterLink to="/">Beranda</RouterLink>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="pemesanan.html" style="color: white">Pemesanan</a> -->
                <RouterLink to="/pemesanan">pemesanan</RouterLink>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="rekomendasi-mobil.html" style="color: white">Mobil</a> -->
               <RouterLink to="/mobil">Mobil</RouterLink>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="berita.html" style="color: white">Berita</a> -->
               <RouterLink to="/berita">Berita</RouterLink>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="about.html" style="color: white">Tentang Kami</a> -->
               <RouterLink to="/tentang-kami">Tentang Kami</RouterLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <RouterView/>
</template>

<script> 
  export default{
    name: 'myHeader'
  }
</script>

<style scoped>
   @import url('../assets/header.css');
</style>