<?php
// src/Command/TestEmailCommand.php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Mailer\Mailer;
use Cake\ORM\TableRegistry;

class TestEmailCommand extends Command
{
    public function initialize(): void
    {
        parent::initialize();
    }

    public function execute(Arguments $args, ConsoleIo $io): void
    {
        // Test Email
        $mailer = new Mailer();
        $mailer
            ->setEmailFormat('html')
            ->setFrom(['regulatory@pharmacyboardkenya.org' => 'PV: The Pharmacy and Poisons Board'])
			// ->setTo('jkiprotich@intellisoftkenya.com')
            ->setCc('jkiprotich@intellisoftkenya.com')
            ->setSubject('subject')
            ->setViewVars([
				'content' => 'sample'
			])
            ->viewBuilder()
                ->setTemplate('default'); 

        $result = $mailer->deliver();

        if ($result) {
            $io->success('Email sent successfully.');
        } else {
            $io->error('Failed to send email. No result returned.');
        }

        // Test Notification
        $save_data = array(
			'user_id' => 1,
			'type' => 'sample',
			'model' => 'Users',
			'foreign_key' => '1',
			'title' => 'subject',
			'system_message' => 'message',

		);
		$notificationsTable = TableRegistry::getTableLocator()->get('Notifications');

		$payload = $notificationsTable->newEmptyEntity();
		$payload = $notificationsTable->patchEntity($payload, $save_data);

		//Send notification   
		if ($notificationsTable->save($payload)) {
            $io->success('Notification created successfully.');
		}else{
            $errorMessages = [];
            foreach ($payload->getErrors() as $field => $errors) {
                foreach ($errors as $error) {
                    $errorMessages[] = ucfirst($field) . ': ' . $error;
                }
            }
            $errorString = implode(', ', $errorMessages);
            $io->error('Failed to create a notification . No result returned.'.$errorString);
        }
    }
}
