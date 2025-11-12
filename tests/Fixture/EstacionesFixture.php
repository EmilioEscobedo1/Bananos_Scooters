<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstacionesFixture
 */
class EstacionesFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'capacidad' => 1,
                'latitud' => 1.5,
                'longitud' => 1.5,
                'created' => 1762445107,
                'modified' => 1762445107,
            ],
        ];
        parent::init();
    }
}
