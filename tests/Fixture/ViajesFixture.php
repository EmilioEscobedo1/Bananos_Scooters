<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ViajesFixture
 */
class ViajesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'vehiculo_id' => 1,
                'estacion_destino_id' => 1,
                'hora_inicio' => 1762445118,
                'hora_fin' => 1762445118,
                'created' => 1762445118,
                'modified' => 1762445118,
            ],
        ];
        parent::init();
    }
}
