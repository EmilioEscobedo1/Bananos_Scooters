<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css('home') ?>
</head>
<header>
<img src="./img/logoOnlyScooters.png" alt="logo goes here" id="logo_scooters"><h1>OnlyScooters</h1>
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
            <li><a href="">Facebook: @Only_Scooters</a></li>
            <li><a href="">Twitter: @Only_Scooters</a></li>
            <li><a href="">Instagram: @OnlyScooters</a></li>
            <li><a href="">Whatsapp: 462-207-1968</a></li>
            <li><a href="">Email: OnlyScooters@business.com</a></li>
        </ul>        
    </footer>
</body>
</html>
