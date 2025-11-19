<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->Html->css('home') ?>
    <meta charset="UTF-8">
    <title>OnlyScooters</title>
</head>

<body>

    <section>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="./img/joyorT7.jpg" style="width: 225px">
    <div class="text">joyorT7</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="./img/turboantM10.jpg" style="width: 225px">
    <div class="text">turboantM10</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="./img/xiaomi lite 4.jpg" style="width: 225px">
    <div class="text">Xiaomi lite 4</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="./img/xp4_stepthrough.jpg" style="width: 225px">
    <div class="text">xp4_stepthrough</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="./img/smartkickN1_1200W.jpg" style="width: 225px">
    <div class="text">smartkickN1</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

    </section>

    <section>
        <p>Get to and from with a scooter thats only for you</p>
    </section>
</body>

<script>
  let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}  
</script>

</html>