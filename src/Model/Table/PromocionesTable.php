<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Promociones Model
 *
 * @method \App\Model\Entity\Promocione newEmptyEntity()
 * @method \App\Model\Entity\Promocione newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Promocione> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Promocione get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Promocione findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Promocione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Promocione> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Promocione|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Promocione saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Promocione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promocione>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Promocione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promocione> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Promocione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promocione>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Promocione>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Promocione> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PromocionesTable extends Table
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

        $this->setTable('promociones');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('codigo')
            ->maxLength('codigo', 100)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->decimal('descuento')
            ->requirePresence('descuento', 'create')
            ->notEmptyString('descuento');

        $validator
            ->dateTime('fecha_expiracion')
            ->allowEmptyDateTime('fecha_expiracion');

        $validator
            ->boolean('estado')
            ->allowEmptyString('estado');

        return $validator;
    }
}
