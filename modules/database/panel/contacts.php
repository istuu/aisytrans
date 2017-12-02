<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'first_name',
                                'last_name',
                                'email',
                                'phone',
                                'message' => [
                                        'modifier' => 'words:10'
                                ],
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'delete'
        ]
];
