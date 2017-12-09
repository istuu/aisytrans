<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'title' => 'Category',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'sequence',
                                'title',
                                'icon',
                                'color',
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
                                'package.categories.title',
                                'package.categories.icon' => [
                                        'info' => "Please use Font Awesome icon code, source : http://fontawesome.io/icons/",
                                        'placeholder' => 'fa-icons',
                                ],
                                'package.categories.color' => [
                                        'type' => 'select',
                                        'options' => [
                                            'bgblue-1'  => 'Blue',
                                            'bggreen-1' => 'Green',
                                            'bgyallow-1' => 'Yellow',
                                            'bgpurpal-1' => 'Purple',
                                            'bggreen-2'  => 'Light Green',
                                            'bgorange-1' => 'Orange',
                                        ],
                                ],
                                'package.categories.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'package.categories.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'package.categories.title',
                                'package.categories.icon' => [
                                        'info' => "Please use Font Awesome icon code, source : http://fontawesome.io/icons/",
                                        'placeholder' => 'fa-icons',
                                ],
                                'package.categories.color' => [
                                        'type' => 'select',
                                        'options' => [
                                            'bgblue-1'  => 'Blue',
                                            'bggreen-1' => 'Green',
                                            'bgyallow-1' => 'Yellow',
                                            'bgpurpal-1' => 'Purple',
                                            'bggreen-2'  => 'Light Green',
                                            'bgorange-1' => 'Orange',
                                        ],
                                ],
                                'package.categories.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'package.categories.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
