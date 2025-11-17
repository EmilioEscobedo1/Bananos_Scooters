<!DOCTYPE html>
<html lang="es">

<head>
    <?= $this->Html->css('home') ?>
    <meta charset="UTF-8">
    <title>OnlyScooters</title>
</head>

<body>

    <header>
        <img src="C:\bananosScooters\Bananos_Scooters\webroot\img\logoOnlyScooters.png" alt="logo goes here"><h1>OnlyScooters</h1>
    </header>

    <nav>
        <ul>
            <li style="padding:15px;">Promotions</li>
            <li style="padding:15px;">Map</li>
            <li style="padding:15px;">Login/Register</li>
            <li style="padding:15px;">Rent(trips)</li>
            <li style="padding:15px;">Models</li>
            <li style="padding:15px;">Stations</li>
            <li style="padding:15px;">Account</li>
        </ul>
    </nav>

    <section>
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="C:\bananosScooters\Bananos_Scooters\webroot\img\b_electric 500w.jpg">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="C:\bananosScooters\Bananos_Scooters\webroot\img\hiboyS2pro.jpg">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="webroot\img\joyorT7.jpg">
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

    <footer>
        <ul>
            <li><a>Facebook</a></li>
            <li><a>Twitter</a></li>
            <li><a>Instagram</a></li>
            <li><a>Whatsapp</a></li>
            <li><a>Email</a></li>
        </ul>
    </footer>

</body>
</html>