<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KineticdataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KineticdataTable Test Case
 */
class KineticdataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KineticdataTable
     */
    protected $Kineticdata;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Kineticdata',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Kineticdata') ? [] : ['className' => KineticdataTable::class];
        $this->Kineticdata = $this->getTableLocator()->get('Kineticdata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Kineticdata);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KineticdataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
