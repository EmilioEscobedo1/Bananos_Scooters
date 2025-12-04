<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo $modelo
 */
$this->Html->css('modelos.css', ['block' => true]);
?>

<h2><?= h($modelo->nombre) ?></h3>
    <h4><?= __('Vehiculos de este modelo:') ?></h4>
    <div class="modelos-grid">
        <?php foreach ($modelo->vehiculos as $vehiculo) : ?>
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
                        <span class="info-label"><?= __('No Serie') ?>:</span>
                        <span class="info-value"><?= h($vehiculo->no_serie) ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><?= __('Bateria') ?>:</span>
                        <span class="info-value"><?= h($vehiculo->bateria) ?>%</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><?= __('Estado') ?>:</span>
                        <span class="info-value"><?= h($vehiculo->estado) ?></span>
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <div class="card-actions">
                    <?= $this->Html->link(
                        __('Rentar'),
                        ['action' => 'view', $modelo->id],
                        ['class' => 'button button-small button-view']
                    ) ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
