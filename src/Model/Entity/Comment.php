<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comment Entity
 *
 * @property int $id
 * @property int $foreign_key
 * @property int|null $user_id
 * @property int|null $model_id
 * @property string|null $model
 * @property string|null $category
 * @property string|null $sender
 * @property string|null $subject
 * @property string|null $content
 * @property string|null $review
 * @property \Cake\I18n\FrozenTime|null $deleted
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Comment extends Entity
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
        'foreign_key' => true,
        'user_id' => true,
        'model_id' => true,
        'model' => true,
        'category' => true,
        'sender' => true,
        'subject' => true,
        'content' => true,
        'review' => true,
        'deleted' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
