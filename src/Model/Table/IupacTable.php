<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Iupac Model
 *
 * @method \App\Model\Entity\Iupac newEmptyEntity()
 * @method \App\Model\Entity\Iupac newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Iupac[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Iupac get($primaryKey, $options = [])
 * @method \App\Model\Entity\Iupac findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Iupac patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Iupac[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Iupac|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iupac saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iupac[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Iupac[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Iupac[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Iupac[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IupacTable extends Table
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

        $this->setTable('iupac');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->allowEmptyString('name');

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
            ->maxLength('InChIKey', 30)
            ->requirePresence('InChIKey', 'create')
            ->notEmptyString('InChIKey');

        $validator
            ->scalar('CAS')
            ->maxLength('CAS', 20)
            ->requirePresence('CAS', 'create')
            ->notEmptyString('CAS');

        $validator
            ->scalar('abbreviation')
            ->maxLength('abbreviation', 5)
            ->requirePresence('abbreviation', 'create')
            ->notEmptyString('abbreviation');

        $validator
            ->boolean('solution')
            ->requirePresence('solution', 'create')
            ->notEmptyString('solution');

        $validator
            ->integer('concentration')
            ->requirePresence('concentration', 'create')
            ->notEmptyString('concentration');

        $validator
            ->boolean('iupac')
            ->requirePresence('iupac', 'create')
            ->notEmptyString('iupac');

        $validator
            ->scalar('DOI')
            ->maxLength('DOI', 200)
            ->requirePresence('DOI', 'create')
            ->notEmptyString('DOI');

        $validator
            ->integer('A')
            ->requirePresence('A', 'create')
            ->notEmptyString('A');

        $validator
            ->integer('Ea')
            ->requirePresence('Ea', 'create')
            ->notEmptyString('Ea');

        return $validator;
    }
}
