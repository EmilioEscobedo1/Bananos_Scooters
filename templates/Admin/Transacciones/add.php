<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaccione $transaccione
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $viajes
 * @var \Cake\Collection\CollectionInterface|string[] $metodoDePagos
 * @var \Cake\Collection\CollectionInterface|string[] $promocions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Transacciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transacciones form content">
            <?= $this->Form->create($transaccione) ?>
            <fieldset>
                <legend><?= __('Add Transaccione') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('viaje_id', ['options' => $viajes]);
                    echo $this->Form->control('metodo_de_pago_id', ['options' => $metodoDePagos]);
                    echo $this->Form->control('costo');
                    echo $this->Form->control('promocion_id', ['options' => $promocions, 'empty' => true]);
                    echo $this->Form->control('fecha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
