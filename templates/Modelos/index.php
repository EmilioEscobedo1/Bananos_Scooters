<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Modelo> $modelos
 */
$this->Html->css('modelos.css', ['block' => true]);
?>
<div class="modelos index content">
    <?= $this->Html->link(__('New Modelo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modelos') ?></h3>
    
    <div class="modelos-grid">
        <?php foreach ($modelos as $modelo): ?>
        <div class="modelo-card">
            <div class="card-header">
                <h4><?= h($modelo->nombre) ?></h4>
                <span class="card-id">#<?= $this->Number->format($modelo->id) ?></span>
            </div>
            
            <div class="card-body">
                <div class="card-info">
                    <div class="info-item">
                        <span class="info-label"><?= __('Tarifa por minuto') ?>:</span>
                        <span class="info-value tarifa"><?= $this->Number->currency($modelo->tarifa_por_minuto, 'USD') ?></span>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-label"><?= __('Creado') ?>:</span>
                        <span class="info-value"><?= h($modelo->created->format('d/m/Y')) ?></span>
                    </div>
                    
                    <div class="info-item">
                        <span class="info-label"><?= __('Actualizado') ?>:</span>
                        <span class="info-value"><?= h($modelo->modified->format('d/m/Y')) ?></span>
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <div class="card-actions">
                    <?= $this->Html->link(
                        __('View'),
                        ['action' => 'view', $modelo->id],
                        ['class' => 'button button-small button-view']
                    ) ?>
                    <?= $this->Html->link(
                        __('Edit'),
                        ['action' => 'edit', $modelo->id],
                        ['class' => 'button button-small button-edit']
                    ) ?>
                    <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $modelo->id],
                        [
                            'class' => 'button button-small button-delete',
                            'method' => 'delete',
                            'confirm' => __('Are you sure you want to delete # {0}?', $modelo->id),
                        ]
                    ) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
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