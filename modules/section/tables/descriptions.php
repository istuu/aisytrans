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
        ['master' => 'title', 'multilingual' => true],
        ['master' => 'description', 'notnull' => false, 'name' => 'highlight', 'multilingual' => true],
        ['master' => 'description', 'notnull' => false, 'name' => 'description', 'multilingual' => true],
        ['master' => 'sequence'],
        ['master' => 'falseBool', 'name' => 'is_active'],
        'timestamps' => true,
        'history' => [
            'group' => 'descriptions',
            'item' => 'title'
        ],
];
