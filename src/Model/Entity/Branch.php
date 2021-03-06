<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Branch Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $registerDate
 * @property string $registerNumber
 * @property string $fileNumber
 * @property \Cake\I18n\FrozenDate $tahunKewangan
 * @property string $status
 * @property string $wilayah
 * @property \Cake\I18n\FrozenDate $tahunBatal
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Branch extends Entity
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
        'name' => true,
        'registerDate' => true,
        'registerNumber' => true,
        'fileNumber' => true,
        'tahunKewangan' => true,
        'status' => true,
        'wilayah' => true,
        'tahunBatal' => true,
        'address' => true,
        'created' => true,
        'modified' => true,
        'phoneNumber' => true,
    ];
}
