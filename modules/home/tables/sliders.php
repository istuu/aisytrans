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
        ['master' => 'title', 'name' => 'image'],
        ['master' => 'title' , 'notnull' => false],
        ['master' => 'longTitle','name' => 'description', 'notnull' => false],
        ['master' => 'int', 'notnull' => false, 'name' => 'rating'],
        ['master' => 'title', 'name' => 'button', 'notnull' => false],
        ['master' => 'title', 'name' => 'permalink', 'notnull' => false],
        ['master' => 'sequence'],
        ['master' => 'falseBool', 'name' => 'is_active'],
        'timestamps' => true,
        'history' => [
            'group' => 'sliders',
            'item' => 'title'
        ],
];
