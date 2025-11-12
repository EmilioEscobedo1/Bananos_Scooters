<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MetodoDePagosFixture
 */
class MetodoDePagosFixture extends TestFixture
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
                'alias' => 'Lorem ipsum dolor sit amet',
                'tipo' => 'Lorem ipsum dolor sit amet',
                'titular' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ipsum dolor ',
                'fecha_expiracion' => 'Lorem ip',
                'cvv' => 'Lor',
                'created' => 1762445108,
                'modified' => 1762445108,
            ],
        ];
        parent::init();
    }
}
