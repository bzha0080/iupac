<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monomers Model
 *
 * @method \App\Model\Entity\Monomer newEmptyEntity()
 * @method \App\Model\Entity\Monomer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Monomer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monomer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Monomer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Monomer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Monomer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monomer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monomer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monomer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Monomer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Monomer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Monomer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MonomersTable extends Table
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

        $this->setTable('monomers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('monomer_id');
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('abbreviation')
            ->maxLength('abbreviation', 10)
            ->requirePresence('abbreviation', 'create')
            ->notEmptyString('abbreviation');

        $validator
            ->scalar('CAS')
            ->maxLength('CAS', 20)
            ->requirePresence('CAS', 'create')
            ->notEmptyString('CAS');

        $validator
            ->scalar('SMILES')
            ->maxLength('SMILES', 100)
            ->requirePresence('SMILES', 'create')
            ->notEmptyString('SMILES');

        $validator
            ->scalar('InChI')
            ->maxLength('InChI', 100)
            ->requirePresence('InChI', 'create')
            ->notEmptyString('InChI');

        $validator
            ->scalar('InChIKey')
            ->maxLength('InChIKey', 100)
            ->requirePresence('InChIKey', 'create')
            ->notEmptyString('InChIKey');

        return $validator;
    }
}
