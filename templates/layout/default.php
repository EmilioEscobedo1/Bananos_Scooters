<!DOCTYPE html>
<html>
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
