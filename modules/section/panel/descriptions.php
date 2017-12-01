<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'title' => 'Description',
        'listing' => [
                'headers' => [
                        'columns' => [
                                ':sectionMenu',
                                'sequence',
                                'title',
                                'highlight' => [
                                        'modifier' => 'words:10'
                                ],
                                'description' => [
                                        'modifier' => 'words:10'
                                ],
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
                                'section.descriptions.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'description',
                                        'notnull' => true
                                ],
                                'section.descriptions.title',
                                'section.descriptions.highlight' => [
                                        'type' => 'textarea',
                                        'rows'=>'4',
                                        'required' => false,
                                ],
                                'section.descriptions.description' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor',
                                ],
                                'section.descriptions.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'section.descriptions.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.descriptions.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'description',
                                        'notnull' => true
                                ],
                                'section.descriptions.title',
                                'section.descriptions.highlight' => [
                                        'type' => 'textarea',
                                        'rows'=>'4',
                                        'required' => false,
                                ],
                                'section.descriptions.description' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor',
                                ],
                                'section.descriptions.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'section.descriptions.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
