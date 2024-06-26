<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark pt-1 pb-1">
      <div class="container">
        <RouterLink class="navbar-brand" to="/">
          <img class="logo" src="../../public/img/logo 2.png" alt="cobuddy" />
        </RouterLink>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul id="font" class="navbar-nav ms-auto">
            <li class="nav-item">
              <RouterLink class="nav-link" to="/">Beranda</RouterLink>
            </li>
            <li class="nav-item">
              <RouterLink class="nav-link" to="/pemesanan">Pemesanan</RouterLink>
            </li>
            <li class="nav-item">
              <RouterLink class="nav-link" to="/mobil">Mobil</RouterLink>
            </li>
            <li class="nav-item">
              <RouterLink class="nav-link" to="/berita">Berita</RouterLink>
            </li>
            <li class="nav-item">
              <RouterLink class="nav-link" to="/tentang-kami">Tentang Kami</RouterLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <RouterView/>
</template>

<script>
export default {
  name: 'myHeader'
}
</script>

<style scoped>
@import '../assets/header.css';
</style>
