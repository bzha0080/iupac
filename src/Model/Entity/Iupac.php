<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Iupac Entity
 *
 * @property string|null $name
 * @property string $SMILES
 * @property string $InChI
 * @property string $InChIKey
 * @property string $CAS
 * @property string $abbreviation
 * @property bool $solution
 * @property int $concentration
 * @property bool $iupac
 * @property string $DOI
 * @property int $A
 * @property int $Ea
 * @property int $id
 */
class Iupac extends Entity
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
        'SMILES' => true,
        'InChI' => true,
        'InChIKey' => true,
        'CAS' => true,
        'abbreviation' => true,
        'solution' => true,
        'concentration' => true,
        'iupac' => true,
        'DOI' => true,
        'A' => true,
        'Ea' => true,
    ];
}
