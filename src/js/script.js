window.addEventListener("scroll", function () {
  var navbar = document.getElementsByClassName("navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});
