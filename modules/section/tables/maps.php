<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title', 'name' => 'section_id', 'notnull' => true],
        ['master' => 'title'],
        ['master' => 'title', 'name' => 'latitude'],
        ['master' => 'title', 'name' => 'longitude'],
        ['master' => 'falseBool', 'name' => 'is_active'],
        'timestamps' => true,
        'history' => [
            'group' => 'maps',
            'item' => 'title'
        ],
];
