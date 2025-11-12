<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modelos Model
 *
 * @property \App\Model\Table\VehiculosTable&\Cake\ORM\Association\HasMany $Vehiculos
 *
 * @method \App\Model\Entity\Modelo newEmptyEntity()
 * @method \App\Model\Entity\Modelo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Modelo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modelo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Modelo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Modelo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Modelo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modelo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Modelo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Modelo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modelo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Modelo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modelo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Modelo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modelo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Modelo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modelo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModelosTable extends Table
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

        $this->setTable('modelos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Vehiculos', [
            'foreignKey' => 'modelo_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('tarifa_por_minuto')
            ->maxLength('tarifa_por_minuto', 20)
            ->allowEmptyString('tarifa_por_minuto');

        return $validator;
    }
}
