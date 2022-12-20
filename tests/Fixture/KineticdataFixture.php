<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KineticdataFixture
 */
class KineticdataFixture extends TestFixture
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
                'id' => 1,
                'Monomer' => 'Lorem ipsum dolor sit amet',
                'tres' => 1,
                'Conversion' => 1,
            ],
        ];
        parent::init();
    }
}
