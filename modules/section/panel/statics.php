<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 2/24/2017
 * Time: 5:09 PM
 */

return [
        'type' => 'listing',
        'title' => 'Static',
        'listing' => [
                'headers' => [
                        'columns' => [
                                ':sectionMenu',
                                'banner' => ['modifier' => 'thumb:90%', 'style' => 'width:20%'],
                                'title',
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
                                'section.statics.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'static',
                                        'notnull' => true
                                ],
                                'section.statics.banner' => [
                                        'info' => "Please use image in 1920px X 550px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB).",
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 1920,
                                                        'height' => 550,
                                                ]
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                ],
                                'section.statics.title',
                                'section.statics.description' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor',
                                        'required' => false,
                                ],
                                'section.statics.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'section.statics.section_id' => [
                                        'type' => 'select template',
                                        'title' => 'Menu Section',
                                        'section' => 'static',
                                        'notnull' => true
                                ],
                                'section.statics.banner' => [
                                        'info' => "Please use image in 1920px X 550px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB).",
                                        'file' => [
                                                'type' => 'image',
                                                'mimes' => ['jpg', 'jpeg', 'png'],
                                                'max' => 1024,
                                                'upload-dir' => 'site/uploads/images',
                                                'resize' => [
                                                        'width' => 1920,
                                                        'height' => 550,
                                                ]
                                        ],
                                        'id'=>'image',
                                        'container'=>'form.images',
                                        'required' => false,
                                        'ignored'  => true
                                ],
                                'section.statics.title',
                                'section.statics.description' => [
                                        'type' => 'textarea',
                                        'class'=>'ckeditor',
                                        'required' => false,
                                ],
                                'section.statics.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
