<nav class="navbar navbar-expand-lg bg-dark  text-white pt-1 pb-1">
      <div class="container">
          <img class="logo" src="img/logo 2.png" alt="cobuddy" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul id="font" class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pemesanan') }}">Pemesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('mobil') }}">Mobil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('berita') }}">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('tentangKami') }}">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>