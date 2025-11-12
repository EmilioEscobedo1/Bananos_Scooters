<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PromocionesFixture
 */
class PromocionesFixture extends TestFixture
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
                'codigo' => 'Lorem ipsum dolor sit amet',
                'descuento' => 1.5,
                'fecha_expiracion' => 1762445111,
                'estado' => 1,
                'created' => 1762445111,
                'modified' => 1762445111,
            ],
        ];
        parent::init();
    }
}
