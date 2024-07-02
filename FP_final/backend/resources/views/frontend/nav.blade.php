<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobuddy</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-dark text-white pt-1 pb-1 fixed-top">
    <div class="container">
        <img class="logo" src="img/logo 2.png" alt="cobuddy" />
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="font" class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'text-success' : 'text-white' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pemesanan') ? 'text-success' : 'text-white' }}" href="{{ route('pemesanan') }}">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('mobil') ? 'text-success' : 'text-white' }}" href="{{ route('mobil') }}">Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita') ? 'text-success' : 'text-white' }}" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tentang-kami') ? 'text-success' : 'text-white' }}" href="{{ route('tentangKami') }}">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
  $(window).scroll(function () {
    if (this.scrollY > 20) {
      $(".navbar").addClass("sticky");
    } else {
      $(".navbar").removeClass("sticky");
    }
    if (this.scrollY > 500) {
      $(".scroll-up-btn").addClass("show");
    } else {
      $(".scroll-up-btn").removeClass("show");
    }
  });
});

$(".scroll-up-btn").click(function () {
    $("html").animate({ scrollTop: 0 });
  });

  // toggle
  $(".navbar-toggler").click(function () {
    $(".navbar-collapse").toggleClass("show");
  });
</script>
    
</body>
</html>




