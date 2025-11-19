<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css('cake') ?>
    <?= $this->Html->css('home') ?>
    <?= $this->Html->css('fonts.css') ?>
    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('normalize.min.css') ?>
    
    <meta charset="UTF-8">
    <title>OnlyScooters</title>
</head>
<header>
<img src="/img/logoOnlyScooters.png" alt="logo goes here" id="logo_scooters"><h1>OnlyScooters</h1>
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
