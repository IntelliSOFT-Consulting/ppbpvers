<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AggregateListOfSignal Entity
 *
 * @property int $id
 * @property int|null $aggregate_id
 * @property int|null $aggregate_followup_id
 * @property string|null $signal_term
 * @property string|null $source_trigger
 * @property string|null $status
 * @property string|null $outcome
 * @property \Cake\I18n\FrozenDate|null $date_detected
 * @property \Cake\I18n\FrozenDate|null $date_closed
 * @property string|null $reason_summary
 * @property string|null $evaluation_method
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Aggregate $aggregate
 */
class AggregateListOfSignal extends Entity
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
        'aggregate_id' => true,
        'aggregate_followup_id' => true,
        'signal_term' => true,
        'source_trigger' => true,
        'status' => true,
        'outcome' => true,
        'date_detected' => true,
        'date_closed' => true,
        'reason_summary' => true,
        'evaluation_method' => true,
        'created' => true,
        'modified' => true,
        'aggregate' => true,
    ];
}
