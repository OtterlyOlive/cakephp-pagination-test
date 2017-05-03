<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IconsTagsFixture
 *
 */
class IconsTagsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tag_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'icon_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_TAG_ID' => ['type' => 'index', 'columns' => ['tag_id'], 'length' => []],
            'BY_ICON_ID' => ['type' => 'index', 'columns' => ['icon_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '0a43adc3-1afc-450a-b09e-026f5fb914bf',
            'tag_id' => '3ed3f89c-c707-4a07-b9be-a6f60abbf5c4',
            'icon_id' => '62fa2d6d-564f-4c82-b67a-d1e19f2c7a82',
            'created' => '2017-04-21 16:00:59',
            'modified' => '2017-04-21 16:00:59'
        ],
    ];
}
