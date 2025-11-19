<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MetodoDePago $metodoDePago
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $metodoDePago->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $metodoDePago->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Metodo De Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="metodoDePagos form content">
            <?= $this->Form->create($metodoDePago) ?>
            <fieldset>
                <legend><?= __('Edit Metodo De Pago') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('alias');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('titular');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('fecha_expiracion');
                    echo $this->Form->control('cvv');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
