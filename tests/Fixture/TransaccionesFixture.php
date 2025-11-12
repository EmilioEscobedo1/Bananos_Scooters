<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransaccionesFixture
 */
class TransaccionesFixture extends TestFixture
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
                'viaje_id' => 1,
                'metodo_de_pago_id' => 1,
                'costo' => 1.5,
                'promocion_id' => 1,
                'fecha' => 1762445114,
                'created' => 1762445114,
                'modified' => 1762445114,
            ],
        ];
        parent::init();
    }
}
