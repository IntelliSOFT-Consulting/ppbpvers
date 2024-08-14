<?php

namespace App\Queue\Task;

use Cake\Mailer\Mailer;
use Queue\Queue\Task;

class GenericEmailTask extends Task
{

	/**
	 * @param array<string, mixed> $data The array passed to QueuedJobsTable::createJob()
	 * @param int $jobId The id of the QueuedJob entity
	 * @return void
	 */
	public function run(array $data, int $jobId): void
	{
		$mailer = new Mailer();
        $mailer
            ->setEmailFormat('html')
            ->setFrom(['regulatory@pharmacyboardkenya.org' => 'PV: The Pharmacy and Poisons Board'])
			->setTo($data['email'])
            ->setCc('jkiprotich@intellisoftkenya.com')
			->setSubject($data['subject'])
			->setViewVars([
				'content' => $data['message']
			])
            ->viewBuilder()
                ->setTemplate('default');
			 
				


		$result = $mailer->deliver();
	}
}
