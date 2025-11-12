<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaccione Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $viaje_id
 * @property int $metodo_de_pago_id
 * @property string|null $costo
 * @property int|null $promocion_id
 * @property \Cake\I18n\DateTime|null $fecha
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Viaje $viaje
 * @property \App\Model\Entity\MetodoDePago $metodo_de_pago
 * @property \App\Model\Entity\Promocione $promocion
 */
class Transaccione extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'viaje_id' => true,
        'metodo_de_pago_id' => true,
        'costo' => true,
        'promocion_id' => true,
        'fecha' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'viaje' => true,
        'metodo_de_pago' => true,
        'promocion' => true,
    ];
}
