<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css(['home']) ?>
    <?= $this->Html->css(['cake']) ?>
    <?= $this->Html->css(['fonts']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<header>
<img src="/img/logoOnlyScooters.png" alt="logo goes here" id="logo_scooters"><h1>OnlyScooters</h1>
</header>
<nav>
    <ul>
        <li><a href="/modelos">MODELOS</a></li>
        <li><a href="/mapa">MAPA</a></li>
        <li><a href="/promociones">PROMOCIONES</a></li>
        <li><a href="/rentas">RENTAS</a></li>
        <li><a href="/estaciones">ESTACIONES</a></li>
    </ul>
</nav>
<body>
    <main class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="footerLine">
            <ul>  <li><a href="sobre">NOSOTROS</a></li>
                    <li><a href="contactanos">CONTACTANOS</a></li>
                    <li><a href="equipo">NUESTRO EQUIPO</a></li>
            </ul> </div>   
        </div> 
    </footer>
</body>
</html>
