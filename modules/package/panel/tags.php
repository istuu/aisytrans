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
                                'sequence',
                                'title',
                                'is_active'=> [
                                        'guarded' => true
                                ]
                        ]
                ],
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'create' => [
                        'form' => [
                                'package.tags.title',
                                'package.tags.sequence' => [
                                        'grouping-column' => 'id',
                                ],
                                'package.tags.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'package.tags.title',
                                'package.tags.sequence' => [
                                        'grouping-column' => 'id',
                                ],
                                'package.tags.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
