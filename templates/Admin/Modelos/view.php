<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo $modelo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Modelo'), ['action' => 'edit', $modelo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Modelo'), ['action' => 'delete', $modelo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modelos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Modelo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="modelos view content">
            <h3><?= h($modelo->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($modelo->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tarifa Por Minuto') ?></th>
                    <td><?= h($modelo->tarifa_por_minuto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($modelo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($modelo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($modelo->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vehiculos') ?></h4>
                <?php if (!empty($modelo->vehiculos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Modelo Id') ?></th>
                            <th><?= __('No Serie') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Estacion Id') ?></th>
                            <th><?= __('Latitud') ?></th>
                            <th><?= __('Longitud') ?></th>
                            <th><?= __('Bateria') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($modelo->vehiculos as $vehiculo) : ?>
                        <tr>
                            <td><?= h($vehiculo->id) ?></td>
                            <td><?= h($vehiculo->modelo_id) ?></td>
                            <td><?= h($vehiculo->no_serie) ?></td>
                            <td><?= h($vehiculo->estado) ?></td>
                            <td><?= h($vehiculo->estacion_id) ?></td>
                            <td><?= h($vehiculo->latitud) ?></td>
                            <td><?= h($vehiculo->longitud) ?></td>
                            <td><?= h($vehiculo->bateria) ?></td>
                            <td><?= h($vehiculo->created) ?></td>
                            <td><?= h($vehiculo->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vehiculos', 'action' => 'view', $vehiculo->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vehiculos', 'action' => 'edit', $vehiculo->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Vehiculos', 'action' => 'delete', $vehiculo->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $vehiculo->id),
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