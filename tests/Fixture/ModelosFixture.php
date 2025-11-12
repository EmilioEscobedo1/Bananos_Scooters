<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModelosFixture
 */
class ModelosFixture extends TestFixture
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
                'tarifa_por_minuto' => 'Lorem ipsum dolor ',
                'created' => 1762445110,
                'modified' => 1762445110,
            ],
        ];
        parent::init();
    }
}
