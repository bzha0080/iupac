<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KpdataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KpdataTable Test Case
 */
class KpdataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KpdataTable
     */
    protected $Kpdata;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Kpdata',
        'app.Monomers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Kpdata') ? [] : ['className' => KpdataTable::class];
        $this->Kpdata = $this->getTableLocator()->get('Kpdata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Kpdata);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KpdataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\KpdataTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
