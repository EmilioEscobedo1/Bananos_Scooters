<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Viajes Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\VehiculosTable&\Cake\ORM\Association\BelongsTo $Vehiculos
 * @property \App\Model\Table\EstacionesTable&\Cake\ORM\Association\BelongsTo $EstacionDestinos
 * @property \App\Model\Table\TransaccionesTable&\Cake\ORM\Association\HasMany $Transacciones
 *
 * @method \App\Model\Entity\Viaje newEmptyEntity()
 * @method \App\Model\Entity\Viaje newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Viaje> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Viaje get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Viaje findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Viaje patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Viaje> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Viaje|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Viaje saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Viaje>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Viaje>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Viaje>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Viaje> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Viaje>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Viaje>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Viaje>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Viaje> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ViajesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('viajes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Vehiculos', [
            'foreignKey' => 'vehiculo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('EstacionDestinos', [
            'foreignKey' => 'estacion_destino_id',
            'className' => 'Estaciones',
        ]);
        $this->hasMany('Transacciones', [
            'foreignKey' => 'viaje_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->integer('vehiculo_id')
            ->notEmptyString('vehiculo_id');

        $validator
            ->integer('estacion_destino_id')
            ->allowEmptyString('estacion_destino_id');

        $validator
            ->dateTime('hora_inicio')
            ->allowEmptyDateTime('hora_inicio');

        $validator
            ->dateTime('hora_fin')
            ->allowEmptyDateTime('hora_fin');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['vehiculo_id'], 'Vehiculos'), ['errorField' => 'vehiculo_id']);
        $rules->add($rules->existsIn(['estacion_destino_id'], 'EstacionDestinos'), ['errorField' => 'estacion_destino_id']);

        return $rules;
    }
}
