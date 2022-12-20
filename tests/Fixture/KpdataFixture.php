<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KpdataFixture
 */
class KpdataFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'kp_id' => 1,
                'monomer_id' => 1,
                'A' => 1,
                'Ea' => 1,
                'iupac_benchmarked' => 1,
                'solution' => 'Lorem ipsum d',
                'concentration' => 1,
                'DOI' => 'Lorem ipsum dolor sit amet',
                'Tmin' => 1,
                'Tmax' => 1,
            ],
        ];
        parent::init();
    }
}
