<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'title' => 'Partner',
        'listing' => [
                'headers' => [
                        'columns' => [
                                ':sectionMenu',
                                'image' => ['modifier' => 'thumb:90%', 'style' => 'width:20%'],
                                'permalink',
                                'sequence',
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
                                'section.partners.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'partner',
                                        'notnull' => true
                                ],
                                'section.partners.image' => [
                                        'info' => "Please use image in 270px X 100px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB).",
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 270,
                                                        'height' => 100,
                                                ]
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                ],
                                'section.partners.permalink',
                                'section.partners.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'section.partners.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.partners.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'partner',
                                        'notnull' => true
                                ],
                                'section.partners.image' => [
                                        'info' => "Please use image in 270px X 100px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB).",
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 270,
                                                        'height' => 100,
                                                ]
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                        'required' => false,
                                        'ignored'  => true
                                ],
                                'section.partners.permalink',
                                'section.partners.sequence' =>[
                                        'grouping-column' => 'section_id',
                                ],
                                'section.partners.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
