<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'int', 'name' => 'category_id'],
        ['master' => 'int', 'name' => 'location_id'],
        ['master' => 'title', 'name' => 'image'],
        ['master' => 'title'],
        ['master' => 'title', 'name' => 'permalink'],
        ['master' => 'description'],
        ['master' => 'sequence'],
        ['master' => 'falseBool', 'name' => 'is_active'],
        'timestamps' => true,
        'history' => [
            'group' => 'packages',
            'item' => 'title'
        ],
];
