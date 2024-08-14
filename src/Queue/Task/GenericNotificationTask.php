<?php

namespace App\Queue\Task;

use Cake\ORM\TableRegistry;
use Queue\Queue\Task;



class GenericNotificationTask extends Task
{



	/* Timeout for run, after which the Task is reassigned to a new worker.     */
	public $timeout = 10;

	/* Number of times a failed instance of this task should be restarted before giving up. */
	public $retries = 3;
	/**
	 * @param array<string, mixed> $data The array passed to QueuedJobsTable::createJob()
	 * @param int $jobId The id of the QueuedJob entity
	 * @return void
	 */
	public function run(array $data, int $jobId): void
	{
		$save_data = array(
			'user_id' => $data['user_id'],
			'type' => $data['type'],
			'model' => $data['model'],
			'foreign_key' => $data['user_id'],
			'title' => $data['subject'],
			'system_message' => $data['message'],

		);
		$notificationsTable = TableRegistry::getTableLocator()->get('Notifications');

		$payload = $notificationsTable->newEmptyEntity();
		$payload = $notificationsTable->patchEntity($payload, $save_data);

		//Send notification   
		if ($notificationsTable->save($payload)) {
		}
		// return true;
	}
}
