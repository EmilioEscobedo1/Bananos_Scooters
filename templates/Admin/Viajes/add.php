<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viaje $viaje
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $vehiculos
 * @var \Cake\Collection\CollectionInterface|string[] $estacionDestinos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Viajes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="viajes form content">
            <?= $this->Form->create($viaje) ?>
            <fieldset>
                <legend><?= __('Add Viaje') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('vehiculo_id', ['options' => $vehiculos]);
                    echo $this->Form->control('estacion_destino_id', ['options' => $estacionDestinos, 'empty' => true]);
                    echo $this->Form->control('hora_inicio');
                    echo $this->Form->control('hora_fin');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
