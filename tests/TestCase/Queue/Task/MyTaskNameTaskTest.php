<?php

namespace App\Test\TestCase\Queue\Task;

use Cake\TestSuite\TestCase;
use App\Queue\Task\MyTaskNameTask;

class MyTaskNameTaskTest extends TestCase {

	/**
	 * @var array<string>
	 */
	protected $fixtures = [
		'plugin.Queue.QueuedJobs',
		'plugin.Queue.QueueProcesses',
	];

	/**
	 * @return void
	 */
	public function testRun(): void {
		$task = new MyTaskNameTask();

		//TODO
		//$task->run($data, $jobId);
	}

}
