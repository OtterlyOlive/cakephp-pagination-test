<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagsTagOptionsFixture
 *
 */
class TagsTagOptionsFixture extends TestFixture
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
        'tag_option_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'BY_TAG_ID' => ['type' => 'index', 'columns' => ['tag_id'], 'length' => []],
            'BY_TAG_OPTION_ID' => ['type' => 'index', 'columns' => ['tag_option_id'], 'length' => []],
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
            'id' => 'bb07fd38-5e90-4c92-a778-7a411b4610f4',
            'tag_id' => '673655fa-ca80-46e3-b7d5-e9c3493a3b33',
            'tag_option_id' => 'c6c16463-c28d-4615-a4f1-b702b4389ccc',
            'created' => '2017-04-21 16:42:51',
            'modified' => '2017-04-21 16:42:51'
        ],
    ];
}
