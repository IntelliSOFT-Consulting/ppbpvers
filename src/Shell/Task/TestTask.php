<?php

// src/Shell/Task/TestTask.php
namespace App\Shell\Task;

use Cake\Console\Shell;

class TestTask extends Shell
{
    public function main()
    {
        $this->out('Running the TestTask...');
        // Call the custom command or functionality you want to test here
        $this->testCommand();
    }

    public function testCommand()
    {
        $this->out('This is a test command.');
        // You can execute any functionality here
        // For example, testing database queries or other operations
    }
}


?>