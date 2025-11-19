<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css('home') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header>
<img src="./img/logoOnlyScooters.png" alt="logo goes here" id="logo_scooters"><h1>OnlyScooters</h1>
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
            <div class="footerNav">
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="contactanos">Contactanos</a></li>
                    <li><a href="equipo">Nuestro Equipo</a></li>
                </ul>
            </div> 
    </footer>
</body>
</html>
