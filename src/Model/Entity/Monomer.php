<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Monomer Entity
 *
 * @property int $monomer_id
 * @property string $name
 * @property string $abbreviation
 * @property string $CAS
 * @property string $SMILES
 * @property string $InChI
 * @property string $InChIKey
 */
class Monomer extends Entity
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
    protected $_accessible = [
        'name' => true,
        'abbreviation' => true,
        'CAS' => true,
        'SMILES' => true,
        'InChI' => true,
        'InChIKey' => true,
    ];
}
