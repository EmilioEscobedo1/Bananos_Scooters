<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehiculo Entity
 *
 * @property int $id
 * @property int $modelo_id
 * @property string $no_serie
 * @property bool|null $estado
 * @property int|null $estacion_id
 * @property string|null $latitud
 * @property string|null $longitud
 * @property int|null $bateria
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Modelo $modelo
 * @property \App\Model\Entity\Estacione $estacion
 * @property \App\Model\Entity\Viaje[] $viajes
 */
class Vehiculo extends Entity
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
        'modelo_id' => true,
        'no_serie' => true,
        'estado' => true,
        'estacion_id' => true,
        'latitud' => true,
        'longitud' => true,
        'bateria' => true,
        'created' => true,
        'modified' => true,
        'modelo' => true,
        'estacion' => true,
        'viajes' => true,
    ];
}
