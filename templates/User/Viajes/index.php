<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Viaje> $viajes
 */
?>
<div class="viajes index content">
    <?= $this->Html->link(__('New Viaje'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Viajes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('vehiculo_id') ?></th>
                    <th><?= $this->Paginator->sort('estacion_destino_id') ?></th>
                    <th><?= $this->Paginator->sort('hora_inicio') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($viajes as $viaje): ?>
                <tr>
                    <td><?= $this->Number->format($viaje->id) ?></td>
                    <td><?= $viaje->hasValue('user') ? $this->Html->link($viaje->user->nombre, ['controller' => 'Users', 'action' => 'view', $viaje->user->id]) : '' ?></td>
                    <td><?= $viaje->hasValue('vehiculo') ? $this->Html->link($viaje->vehiculo->no_serie, ['controller' => 'Vehiculos', 'action' => 'view', $viaje->vehiculo->id]) : '' ?></td>
                    <td><?= $viaje->hasValue('estacion_destino') ? $this->Html->link($viaje->estacion_destino->nombre, ['controller' => 'Estaciones', 'action' => 'view', $viaje->estacion_destino->id]) : '' ?></td>
                    <td><?= h($viaje->hora_inicio) ?></td>
                    <td><?= h($viaje->hora_fin) ?></td>
                    <td><?= h($viaje->created) ?></td>
                    <td><?= h($viaje->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $viaje->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $viaje->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $viaje->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $viaje->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>