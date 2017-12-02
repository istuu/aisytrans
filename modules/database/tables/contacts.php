<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/16/2017
 * Time: 12:08 PM
 */

return [
        ['master' => 'id'],
        ['master' => 'title','name' => 'first_name'],
        ['master' => 'title','name' => 'last_name'],
        ['master' => 'title','name' => 'email'],
        ['master' => 'title','name' => 'phone'],
        ['master' => 'description','name' => 'message'],
        'timestamps' => true,
        'history' => [
            'group' => 'sliders',
            'item' => 'title'
        ],
];
