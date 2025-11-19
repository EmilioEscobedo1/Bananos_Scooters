<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->Html->css('home') ?>
    <meta charset="UTF-8">
    <title>OnlyScooters</title>
</head>

<body>
    <section>
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src=".\img\b_electric 500w.jpg">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="./img/joyorT7.jpg">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="./img/turboantM10.jpg">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

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
</html>