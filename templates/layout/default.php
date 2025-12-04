<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css(['home']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
</head>
<body>
    
    <header>
        <div class="brand-container">
            <img src="/img/logoOnlyScooters.png" alt="logo goes here" id="logo_scooters">
            <h1>OnlyScooters</h1>
        </div>

        <div class="auth-buttons">
            <a href="/users/login">INICIAR SESIÓN</a>
            <a href="/users/add">REGISTRARSE</a>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="/">INICIO</a></li>
            <li><a href="/modelos">MODELOS</a></li>
            <li><a href="/mapa">MAPA</a></li>
            <li><a href="/promociones">PROMOCIONES</a></li>
            <li><a href="/estaciones">ESTACIONES</a></li>
        </ul>
    </nav>

    <main class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <script>
        var map = L.map('map').setView([20.671365757481606, -101.37469891349176], 16);
        var marker = L.marker([20.671365757481606, -101.37469891349176]).addTo(map);
        marker.bindPopup("<b>Estacion Intituto Irapuato</b><br>Av Mariano J. García 355, San Miguelito, 36557 Irapuato, Gto.");
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <div class="footerLine">
                <ul>  
                    <li><a href="sobre">NOSOTROS</a></li>
                    <li><a href="contactanos">CONTACTANOS</a></li>
                    <li><a href="equipo">NUESTRO EQUIPO</a></li>
                </ul> 
            </div>   
        </div> 
    </footer>
</body>
</html>