<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viaje $viaje
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Viaje'), ['action' => 'edit', $viaje->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Viaje'), ['action' => 'delete', $viaje->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viaje->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Viajes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Viaje'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="viajes view content">
            <h3><?= h($viaje->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $viaje->hasValue('user') ? $this->Html->link($viaje->user->nombre, ['controller' => 'Users', 'action' => 'view', $viaje->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vehiculo') ?></th>
                    <td><?= $viaje->hasValue('vehiculo') ? $this->Html->link($viaje->vehiculo->no_serie, ['controller' => 'Vehiculos', 'action' => 'view', $viaje->vehiculo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estacion Destino') ?></th>
                    <td><?= $viaje->hasValue('estacion_destino') ? $this->Html->link($viaje->estacion_destino->nombre, ['controller' => 'Estaciones', 'action' => 'view', $viaje->estacion_destino->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($viaje->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Inicio') ?></th>
                    <td><?= h($viaje->hora_inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($viaje->hora_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($viaje->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($viaje->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Transacciones') ?></h4>
                <?php if (!empty($viaje->transacciones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Viaje Id') ?></th>
                            <th><?= __('Metodo De Pago Id') ?></th>
                            <th><?= __('Costo') ?></th>
                            <th><?= __('Promocion Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($viaje->transacciones as $transaccione) : ?>
                        <tr>
                            <td><?= h($transaccione->id) ?></td>
                            <td><?= h($transaccione->user_id) ?></td>
                            <td><?= h($transaccione->viaje_id) ?></td>
                            <td><?= h($transaccione->metodo_de_pago_id) ?></td>
                            <td><?= h($transaccione->costo) ?></td>
                            <td><?= h($transaccione->promocion_id) ?></td>
                            <td><?= h($transaccione->fecha) ?></td>
                            <td><?= h($transaccione->created) ?></td>
                            <td><?= h($transaccione->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transacciones', 'action' => 'view', $transaccione->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transacciones', 'action' => 'edit', $transaccione->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Transacciones', 'action' => 'delete', $transaccione->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $transaccione->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>