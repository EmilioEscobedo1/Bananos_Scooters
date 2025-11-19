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
            <?= $this->Html->link(__('Edit Promocione'), ['action' => 'edit', $promocione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Promocione'), ['action' => 'delete', $promocione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $promocione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Promociones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Promocione'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="promociones view content">
            <h3><?= h($promocione->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($promocione->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($promocione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descuento') ?></th>
                    <td><?= $this->Number->format($promocione->descuento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Expiracion') ?></th>
                    <td><?= h($promocione->fecha_expiracion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($promocione->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($promocione->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $promocione->estado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>