<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ktdata Model
 *
 * @property \App\Model\Table\MonomersTable&\Cake\ORM\Association\BelongsTo $Monomers
 *
 * @method \App\Model\Entity\Ktdata newEmptyEntity()
 * @method \App\Model\Entity\Ktdata newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ktdata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ktdata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ktdata findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ktdata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ktdata[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ktdata|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ktdata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ktdata[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ktdata[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ktdata[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ktdata[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class KtdataTable extends Table
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

        $this->setTable('ktdata');
        $this->setDisplayField('kt_id');
        $this->setPrimaryKey('kt_id');

        $this->belongsTo('Monomers', [
            'foreignKey' => 'monomer_id',
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
            ->integer('monomer_id')
            ->allowEmptyString('monomer_id');

        $validator
            ->integer('A')
            ->allowEmptyString('A');

        $validator
            ->integer('Ea')
            ->requirePresence('Ea', 'create')
            ->notEmptyString('Ea');

        $validator
            ->allowEmptyString('iupac_benchmarked');

        $validator
            ->allowEmptyString('solution');

        $validator
            ->allowEmptyString('concentration');

        $validator
            ->scalar('DOI')
            ->maxLength('DOI', 500)
            ->requirePresence('DOI', 'create')
            ->notEmptyString('DOI');

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
        $rules->add($rules->existsIn('monomer_id', 'Monomers'), ['errorField' => 'monomer_id']);

        return $rules;
    }
}
