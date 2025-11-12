<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Viaje Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $vehiculo_id
 * @property int|null $estacion_destino_id
 * @property \Cake\I18n\DateTime|null $hora_inicio
 * @property \Cake\I18n\DateTime|null $hora_fin
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Vehiculo $vehiculo
 * @property \App\Model\Entity\Estacione $estacion_destino
 * @property \App\Model\Entity\Transaccione[] $transacciones
 */
class Viaje extends Entity
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
        'vehiculo_id' => true,
        'estacion_destino_id' => true,
        'hora_inicio' => true,
        'hora_fin' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'vehiculo' => true,
        'estacion_destino' => true,
        'transacciones' => true,
    ];
}
