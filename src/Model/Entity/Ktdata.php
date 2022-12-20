<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ktdata Entity
 *
 * @property int $kt_id
 * @property int|null $monomer_id
 * @property int|null $A
 * @property int $Ea
 * @property int|null $iupac_benchmarked
 * @property int|null $solution
 * @property int|null $concentration
 * @property string $DOI
 *
 * @property \App\Model\Entity\Monomer $monomer
 */
class Ktdata extends Entity
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
        'monomer_id' => true,
        'A' => true,
        'Ea' => true,
        'iupac_benchmarked' => true,
        'solution' => true,
        'concentration' => true,
        'DOI' => true,
        'monomer' => true,
    ];
}
