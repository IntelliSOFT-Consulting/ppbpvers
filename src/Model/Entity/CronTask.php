<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CronTask Entity
 *
 * @property int $id
 * @property string $jobtype
 * @property string $title
 * @property string|null $data
 * @property string|null $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $notbefore
 * @property \Cake\I18n\FrozenTime|null $fetched
 * @property \Cake\I18n\FrozenTime|null $completed
 * @property int $failed
 * @property string|null $failure_message
 * @property string|null $workerkey
 * @property int $interval
 * @property int $status
 */
class CronTask extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'jobtype' => true,
        'title' => true,
        'data' => true,
        'name' => true,
        'created' => true,
        'notbefore' => true,
        'fetched' => true,
        'completed' => true,
        'failed' => true,
        'failure_message' => true,
        'workerkey' => true,
        'interval' => true,
        'status' => true,
    ];
}
