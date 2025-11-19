<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehiculo $vehiculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vehiculo'), ['action' => 'edit', $vehiculo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vehiculo'), ['action' => 'delete', $vehiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vehiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vehiculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vehiculos view content">
            <h3><?= h($vehiculo->no_serie) ?></h3>
            <table>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= $vehiculo->hasValue('modelo') ? $this->Html->link($vehiculo->modelo->nombre, ['controller' => 'Modelos', 'action' => 'view', $vehiculo->modelo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('No Serie') ?></th>
                    <td><?= h($vehiculo->no_serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estacion') ?></th>
                    <td><?= $vehiculo->hasValue('estacion') ? $this->Html->link($vehiculo->estacion->nombre, ['controller' => 'Estaciones', 'action' => 'view', $vehiculo->estacion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vehiculo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Latitud') ?></th>
                    <td><?= $vehiculo->latitud === null ? '' : $this->Number->format($vehiculo->latitud) ?></td>
                </tr>
                <tr>
                    <th><?= __('Longitud') ?></th>
                    <td><?= $vehiculo->longitud === null ? '' : $this->Number->format($vehiculo->longitud) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bateria') ?></th>
                    <td><?= $vehiculo->bateria === null ? '' : $this->Number->format($vehiculo->bateria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vehiculo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vehiculo->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $vehiculo->estado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Viajes') ?></h4>
                <?php if (!empty($vehiculo->viajes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Vehiculo Id') ?></th>
                            <th><?= __('Estacion Destino Id') ?></th>
                            <th><?= __('Hora Inicio') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vehiculo->viajes as $viaje) : ?>
                        <tr>
                            <td><?= h($viaje->id) ?></td>
                            <td><?= h($viaje->user_id) ?></td>
                            <td><?= h($viaje->vehiculo_id) ?></td>
                            <td><?= h($viaje->estacion_destino_id) ?></td>
                            <td><?= h($viaje->hora_inicio) ?></td>
                            <td><?= h($viaje->hora_fin) ?></td>
                            <td><?= h($viaje->created) ?></td>
                            <td><?= h($viaje->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Viajes', 'action' => 'view', $viaje->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Viajes', 'action' => 'edit', $viaje->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Viajes', 'action' => 'delete', $viaje->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $viaje->id),
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