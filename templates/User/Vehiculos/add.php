<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo $vehiculo
 * @var \Cake\Collection\CollectionInterface|string[] $modelos
 * @var \Cake\Collection\CollectionInterface|string[] $estacions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vehiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vehiculos form content">
            <?= $this->Form->create($vehiculo) ?>
            <fieldset>
                <legend><?= __('Add Vehiculo') ?></legend>
                <?php
                    echo $this->Form->control('modelo_id', ['options' => $modelos]);
                    echo $this->Form->control('no_serie');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('estacion_id', ['options' => $estacions, 'empty' => true]);
                    echo $this->Form->control('latitud');
                    echo $this->Form->control('longitud');
                    echo $this->Form->control('bateria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
