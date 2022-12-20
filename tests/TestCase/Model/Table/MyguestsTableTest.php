<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MyguestsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MyguestsTable Test Case
 */
class MyguestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MyguestsTable
     */
    protected $Myguests;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Myguests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Myguests') ? [] : ['className' => MyguestsTable::class];
        $this->Myguests = $this->getTableLocator()->get('Myguests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Myguests);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MyguestsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
