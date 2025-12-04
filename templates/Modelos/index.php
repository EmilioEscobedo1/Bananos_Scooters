<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Modelo> $modelos
 */
$this->Html->css('modelos.css', ['block' => true]);
?>
<div class="modelos index content">
    <h2><?= __('Modelos') ?></h3>
    
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
                </div>
            </div>
            
            <div class="card-footer">
                <div class="card-actions">
                    <?= $this->Html->link(
                        __('Ver'),
                        ['action' => 'view', $modelo->id],
                        ['class' => 'button button-small button-view']
                    ) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    
</div>