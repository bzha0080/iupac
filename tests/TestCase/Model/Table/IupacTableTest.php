<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IupacTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IupacTable Test Case
 */
class IupacTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IupacTable
     */
    protected $Iupac;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Iupac',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Iupac') ? [] : ['className' => IupacTable::class];
        $this->Iupac = $this->getTableLocator()->get('Iupac', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Iupac);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IupacTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
