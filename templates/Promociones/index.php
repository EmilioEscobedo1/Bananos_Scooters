<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Promocione> $promociones
 */
$this->Html->css('modelos.css', ['block' => true]);
?>
    <div class="modelos-grid">
        <?php foreach ($promociones as $promocione): ?>
        <div class="modelo-card">
            <div class="card-header">
                <h4><?= h($promocione->codigo) ?></h4>
                <span class="card-id">#<?= $this->Number->format($promocione->id) ?></span>
            </div>
            
            <div class="card-body">
                <div class="card-info">
                    <div class="info-item">
                        <span class="info-label"><?= __('Descuento') ?>:</span>
                        <span class="info-value tarifa"><?= $this->Number->format($promocione->descuento) ?></span>
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