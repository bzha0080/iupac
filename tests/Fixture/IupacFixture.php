<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IupacFixture
 */
class IupacFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'iupac';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'SMILES' => 'Lorem ipsum dolor sit amet',
                'InChI' => 'Lorem ipsum dolor sit amet',
                'InChIKey' => 'Lorem ipsum dolor sit amet',
                'CAS' => 'Lorem ipsum dolor ',
                'abbreviation' => 'Lor',
                'solution' => 1,
                'concentration' => 1,
                'iupac' => 1,
                'DOI' => 'Lorem ipsum dolor sit amet',
                'A' => 1,
                'Ea' => 1,
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
