<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Promocione $promocione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Promociones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="promociones form content">
            <?= $this->Form->create($promocione) ?>
            <fieldset>
                <legend><?= __('Add Promocione') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('descuento');
                    echo $this->Form->control('fecha_expiracion');
                    echo $this->Form->control('estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
