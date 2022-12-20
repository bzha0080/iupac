<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KtdataFixture
 */
class KtdataFixture extends TestFixture
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
                'kt_id' => 1,
                'monomer_id' => 1,
                'A' => 1,
                'Ea' => 1,
                'iupac_benchmarked' => 1,
                'solution' => 1,
                'concentration' => 1,
                'DOI' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
