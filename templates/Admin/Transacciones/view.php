<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transaccione $transaccione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transaccione'), ['action' => 'edit', $transaccione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transaccione'), ['action' => 'delete', $transaccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaccione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transacciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transaccione'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="transacciones view content">
            <h3><?= h($transaccione->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $transaccione->hasValue('user') ? $this->Html->link($transaccione->user->nombre, ['controller' => 'Users', 'action' => 'view', $transaccione->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Viaje') ?></th>
                    <td><?= $transaccione->hasValue('viaje') ? $this->Html->link($transaccione->viaje->id, ['controller' => 'Viajes', 'action' => 'view', $transaccione->viaje->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Metodo De Pago') ?></th>
                    <td><?= $transaccione->hasValue('metodo_de_pago') ? $this->Html->link($transaccione->metodo_de_pago->alias, ['controller' => 'MetodoDePagos', 'action' => 'view', $transaccione->metodo_de_pago->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Promocion') ?></th>
                    <td><?= $transaccione->hasValue('promocion') ? $this->Html->link($transaccione->promocion->codigo, ['controller' => 'Promociones', 'action' => 'view', $transaccione->promocion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transaccione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Costo') ?></th>
                    <td><?= $transaccione->costo === null ? '' : $this->Number->format($transaccione->costo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($transaccione->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transaccione->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($transaccione->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>