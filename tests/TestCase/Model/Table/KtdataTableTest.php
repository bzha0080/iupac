<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KtdataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KtdataTable Test Case
 */
class KtdataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KtdataTable
     */
    protected $Ktdata;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ktdata',
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
        $config = $this->getTableLocator()->exists('Ktdata') ? [] : ['className' => KtdataTable::class];
        $this->Ktdata = $this->getTableLocator()->get('Ktdata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ktdata);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KtdataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\KtdataTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
