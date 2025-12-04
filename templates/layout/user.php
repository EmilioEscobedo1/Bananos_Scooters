<!DOCTYPE html>
<html lang="es">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?> | OnlyScooters
    </title>
    <?php
        echo $this->fetch('favicon', $this->Html->meta('icon'));
    ?>
    
    <?= $this->Html->css(['style', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['user']) ?>
</head>

<body>

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-menu'></i>
            <span class="logo_name">Dashboard</span>
        </div>
        <ul class="nav-links">
            <li>
                <?= $this->Html->link(
                    "<i class='bx bx-user'></i><span class='link_name'>Cuenta</span>",
                    ['controller' => 'Cuenta', 'action' => 'index'],
                    ['escape' => false]
                ) ?>
            </li>
            <li>
                <?= $this->Html->link(
                    "<i class='bx bx-trip'></i><span class='link_name'>Viajes</span>",
                    ['controller' => 'Viajes', 'action' => 'index'],
                    ['escape' => false]
                ) ?>
            </li>
            <li>
                <?= $this->Html->link(
                    "<i class='bx bx-receipt'></i><span class='link_name'>Transacciones</span>",
                    ['controller' => 'Estaciones', 'action' => 'index'],
                    ['escape' => false]
                ) ?>
            </li>
        </ul>
    </div>
        <div class="principal">
            <?= $this->fetch('content') ?>
        </div>
    <?= $this->fetch('script') ?>
</body>
</html>