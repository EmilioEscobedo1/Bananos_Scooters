<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css(['admin']) ?>
</head>
<header>
<div class="caja_logo">
<img src="/img/logoOnlyScooters.png" alt="logo goes here" id="logo_scooters"><h1>OnlyScooters Admin</h1>
</div>
<nav>
    <ul>
        <li><a href="/admin/dashboard">DASHBOARD</a></li>
        <li><a href="/admin/modelos">MODELOS</a></li>
        <li><a href="/admin/promociones">PROMOCIONES</a></li>
        <li><a href="/admin/transacciones">TRANSACCIONES</a></li>
        <li><a href="/admin/estaciones">ESTACIONES</a></li>
        <li><a href="/admin/vehiculos">VEHICULOS</a></li>
    </ul>
</nav>
<div class="usuario-logeado">
    <img src="/img/icono_user.png" alt="Icono usuario logeado">
    <?php $identidad = $this->request->getAttribute('identity'); ?>
    <p>Hola!<br><?= h(ucfirst($identidad->get('username'))) ?></p>
    <a href="/admin/users/logout">Logout</a>
</div>
</header>
<body>
    <main class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
</body>
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
    <p>Copyright &copy;2025; Designed by <span class="designer">Emilio Escobedo, Emiliano Hernandez, Erick Del Campo</span></p>
</footer>
</html>