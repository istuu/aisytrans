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
                                'image' => ['modifier' => 'thumb:90%', 'style' => 'width:20%'],
                                'sequence',
                                'title',
                                'description' => [
                                        'modifier' => 'words:10'
                                ],
                                'rating',
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
                                'home.sliders.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'slider',
                                        'notnull' => true
                                ],
                                'home.sliders.image' => [
                                        'info' => 'Please use image in 1920px X 720px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 1920,
                                                        'height' => 720,
                                                ]
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images'
                                ],
                                'home.sliders.title' => [
                                        'required' => false
                                ],
                                'home.sliders.description' => [
                                        'type' => 'textarea',
                                        'rows'=>'2',
                                        'required' => false,
                                ],
                                'home.sliders.rating' => [
                                        'type' => 'number',
                                        'value' => 0,
                                ],
                                'home.sliders.button' => [
                                        'required' => false,
                                ],
                                'home.sliders.permalink' => [
                                        'required' => false,
                                ],
                                'home.sliders.sequence' => [
                                        'grouping-column' => 'id',
                                ],
                                'home.sliders.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'home.sliders.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'slider',
                                        'notnull' => true
                                ],
                                'home.sliders.image' => [
                                        'info' => 'Please use image in 1920px X 720px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 1920,
                                                        'height' => 720,
                                                ]
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                        'required' => false,
                                        'ignored' => true
                                ],
                                'home.sliders.head' =>[
                                    'required' => false,
                                ],
                                'home.sliders.title' =>[
                                        'required' => false,
                                ],
                                'home.sliders.description' => [
                                        'type' => 'textarea',
                                        'rows'=>'2',
                                        'required' => false
                                ],
                                'home.sliders.rating' =>[
                                    'type' => 'number',
                                    'value' => 0
                                ],
                                'home.sliders.button' => [
                                        'required' => false,
                                ],
                                'home.sliders.permalink' => [
                                        'required' => false,
                                ],
                                'home.sliders.sequence' =>[
                                        'grouping-column' => 'id',
                                ],
                                'home.sliders.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
