<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int|null $event_type_id
 * @property string|null $title
 * @property string|null $details
 * @property \Cake\I18n\FrozenTime|null $start
 * @property \Cake\I18n\FrozenTime|null $end
 * @property bool $all_day
 * @property string $status
 * @property bool $active
 * @property string|null $unit_terlibat
 * @property string|null $urusetia
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
        'unit_terlibat' => true,
        'urusetia' => true,
        'created' => true,
        'modified' => true,
        'event_type' => true,
    ];
}
