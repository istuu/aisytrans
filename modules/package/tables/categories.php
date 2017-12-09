<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title'],
        ['master' => 'title', 'name' => 'icon'],
        ['master' => 'title', 'name' => 'color'],
        ['master' => 'sequence'],
        ['master' => 'falseBool', 'name' => 'is_active'],
        'timestamps' => true,
        'history' => [
            'group' => 'locations',
            'item' => 'title'
        ],
];
