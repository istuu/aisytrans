<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'title' => 'Feature',
        'listing' => [
                'headers' => [
                        'columns' => [
                                ':sectionMenu',
                                'sequence',
                                'title',
                                'description' => [
                                        'modifier' => 'words:10'
                                ],
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
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.features.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'feature',
                                        'notnull' => true
                                ],
                                'section.features.title',
                                'section.features.description' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor',
                                ],
                                'section.features.icon' => [
                                        'info' => "Please use Font Awesome icon code, source : http://fontawesome.io/icons/",
                                        'placeholder' => 'fa-icons',
                                ],
                                'section.features.color' => [
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
                                'section.features.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'section.features.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.features.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'feature',
                                        'notnull' => true
                                ],
                                'section.features.title',
                                'section.features.description' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor',
                                ],
                                'section.features.icon' => [
                                        'info' => "Please use Font Awesome icon code, source : http://fontawesome.io/icons/",
                                        'placeholder' => 'fa-icons',
                                ],
                                'section.features.color' => [
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
                                'section.features.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'section.features.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
