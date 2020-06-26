<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int $event_type_id
 * @property string $title
 * @property string $details
 * @property \Cake\I18n\FrozenTime $start
 * @property \Cake\I18n\FrozenTime $end
 * @property bool $all_day
 * @property string $status
 * @property bool $active
 * @property \Cake\I18n\FrozenDate|null $created
 * @property \Cake\I18n\FrozenDate|null $modified
 *
 * @property \App\Model\Entity\EventType $event_type
 */
class Event extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'event_type_id' => true,
        'title' => true,
        'details' => true,
        'start' => true,
        'end' => true,
        'all_day' => true,
        'status' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'event_type' => true,
    ];
}
