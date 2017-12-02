<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'title' => 'Map',
        'listing' => [
                'headers' => [
                        'columns' => [
                                ':sectionMenu',
                                'title',
                                'latitude',
                                'longitude',
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
                                'section.maps.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'map',
                                        'notnull' => true
                                ],
                                'section.maps.title',
                                'section.maps.latitude',
                                'section.maps.longitude',
                                'section.maps.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'section.maps.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'map',
                                        'notnull' => true
                                ],
                                'section.maps.title',
                                'section.maps.latitude',
                                'section.maps.longitude',
                                'section.maps.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
