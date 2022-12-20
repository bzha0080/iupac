<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kpdata Model
 *
 * @property \App\Model\Table\MonomersTable&\Cake\ORM\Association\BelongsTo $Monomers
 *
 * @method \App\Model\Entity\Kpdata newEmptyEntity()
 * @method \App\Model\Entity\Kpdata newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Kpdata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kpdata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kpdata findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Kpdata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kpdata[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kpdata|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kpdata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kpdata[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kpdata[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kpdata[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kpdata[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class KpdataTable extends Table
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

        $this->setTable('kpdata');
        $this->setDisplayField('kp_id');
        $this->setPrimaryKey('kp_id');

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
            ->requirePresence('A', 'create')
            ->notEmptyString('A');

        $validator
            ->integer('Ea')
            ->requirePresence('Ea', 'create')
            ->notEmptyString('Ea');

        $validator
            ->allowEmptyString('iupac_benchmarked');

        $validator
            ->scalar('solution')
            ->maxLength('solution', 15)
            ->allowEmptyString('solution');

        $validator
            ->allowEmptyString('concentration');

        $validator
            ->scalar('DOI')
            ->maxLength('DOI', 500)
            ->requirePresence('DOI', 'create')
            ->notEmptyString('DOI');

        $validator
            ->integer('Tmin')
            ->allowEmptyString('Tmin');

        $validator
            ->integer('Tmax')
            ->allowEmptyString('Tmax');

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
