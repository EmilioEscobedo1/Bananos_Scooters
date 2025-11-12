<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MetodoDePago Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $alias
 * @property string $tipo
 * @property string $titular
 * @property string $numero
 * @property string $fecha_expiracion
 * @property string $cvv
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Transaccione[] $transacciones
 */
class MetodoDePago extends Entity
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
        'alias' => true,
        'tipo' => true,
        'titular' => true,
        'numero' => true,
        'fecha_expiracion' => true,
        'cvv' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'transacciones' => true,
    ];
}
