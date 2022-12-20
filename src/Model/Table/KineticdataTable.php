<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kineticdata Model
 *
 * @method \App\Model\Entity\Kineticdata newEmptyEntity()
 * @method \App\Model\Entity\Kineticdata newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Kineticdata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kineticdata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kineticdata findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Kineticdata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kineticdata[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kineticdata|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kineticdata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kineticdata[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kineticdata[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kineticdata[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kineticdata[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class KineticdataTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('kineticdata');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('Monomer')
            ->maxLength('Monomer', 100)
            ->requirePresence('Monomer', 'create')
            ->notEmptyString('Monomer');

        $validator
            ->numeric('tres')
            ->requirePresence('tres', 'create')
            ->notEmptyString('tres');

        $validator
            ->numeric('Conversion')
            ->requirePresence('Conversion', 'create')
            ->notEmptyString('Conversion');

        return $validator;
    }
}
