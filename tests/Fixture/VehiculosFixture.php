<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VehiculosFixture
 */
class VehiculosFixture extends TestFixture
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
                'modelo_id' => 1,
                'no_serie' => 'Lorem ipsum dolor sit amet',
                'estado' => 1,
                'estacion_id' => 1,
                'latitud' => 1.5,
                'longitud' => 1.5,
                'bateria' => 1,
                'created' => 1762445117,
                'modified' => 1762445117,
            ],
        ];
        parent::init();
    }
}
