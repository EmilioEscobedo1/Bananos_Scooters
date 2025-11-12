<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MetodoDePagos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TransaccionesTable&\Cake\ORM\Association\HasMany $Transacciones
 *
 * @method \App\Model\Entity\MetodoDePago newEmptyEntity()
 * @method \App\Model\Entity\MetodoDePago newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\MetodoDePago> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MetodoDePago get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\MetodoDePago findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\MetodoDePago patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\MetodoDePago> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MetodoDePago|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\MetodoDePago saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\MetodoDePago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MetodoDePago>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MetodoDePago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MetodoDePago> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MetodoDePago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MetodoDePago>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MetodoDePago>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MetodoDePago> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MetodoDePagosTable extends Table
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

        $this->setTable('metodo_de_pagos');
        $this->setDisplayField('alias');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Transacciones', [
            'foreignKey' => 'metodo_de_pago_id',
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
            ->scalar('alias')
            ->maxLength('alias', 100)
            ->requirePresence('alias', 'create')
            ->notEmptyString('alias');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 50)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        $validator
            ->scalar('titular')
            ->maxLength('titular', 100)
            ->requirePresence('titular', 'create')
            ->notEmptyString('titular');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 20)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('fecha_expiracion')
            ->maxLength('fecha_expiracion', 10)
            ->requirePresence('fecha_expiracion', 'create')
            ->notEmptyString('fecha_expiracion');

        $validator
            ->scalar('cvv')
            ->maxLength('cvv', 5)
            ->requirePresence('cvv', 'create')
            ->notEmptyString('cvv');

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

        return $rules;
    }
}
