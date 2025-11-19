<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MetodoDePago $metodoDePago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Metodo De Pago'), ['action' => 'edit', $metodoDePago->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Metodo De Pago'), ['action' => 'delete', $metodoDePago->id], ['confirm' => __('Are you sure you want to delete # {0}?', $metodoDePago->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Metodo De Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Metodo De Pago'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="metodoDePagos view content">
            <h3><?= h($metodoDePago->alias) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $metodoDePago->hasValue('user') ? $this->Html->link($metodoDePago->user->nombre, ['controller' => 'Users', 'action' => 'view', $metodoDePago->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Alias') ?></th>
                    <td><?= h($metodoDePago->alias) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($metodoDePago->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titular') ?></th>
                    <td><?= h($metodoDePago->titular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($metodoDePago->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Expiracion') ?></th>
                    <td><?= h($metodoDePago->fecha_expiracion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cvv') ?></th>
                    <td><?= h($metodoDePago->cvv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($metodoDePago->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($metodoDePago->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($metodoDePago->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Transacciones') ?></h4>
                <?php if (!empty($metodoDePago->transacciones)) : ?>
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
                        <?php foreach ($metodoDePago->transacciones as $transaccione) : ?>
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