<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonomersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonomersTable Test Case
 */
class MonomersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonomersTable
     */
    protected $Monomers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Monomers') ? [] : ['className' => MonomersTable::class];
        $this->Monomers = $this->getTableLocator()->get('Monomers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Monomers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MonomersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
