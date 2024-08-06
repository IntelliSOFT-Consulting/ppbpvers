<?php
declare(strict_types=1);

namespace App\Test\TestCase\Command;

use App\Command\YourCommandName;
use Cake\TestSuite\ConsoleIntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Command\YourCommandName Test Case
 *
 * @uses \App\Command\YourCommandName
 */
class YourCommandNameTest extends TestCase
{
    use ConsoleIntegrationTestTrait;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->useCommandRunner();
    }
}
