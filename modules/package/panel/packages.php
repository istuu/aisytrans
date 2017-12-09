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
                                'image' => ['modifier' => 'thumb:90%', 'style' => 'width:10%'],
                                'categories.title as category' => [
                                    'title'=>'Category',
                                    'on' => ['ctgrs.id', '=', 'pckgs.category_id']
                                ],
                                'locations.title as location' => [
                                    'title'=>'Location',
                                    'on' => ['lctns.id', '=', 'pckgs.location_id']
                                ],
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
                                'package.packages.category_id' => [
                                         'type' => 'select table',
                                         'title' => 'Category',
                                         'sources' => [
                                            'table' => 'categories',
                                            'column' => ['id', 'title'],
                                         ]
                                ],
                                'package.packages.location_id' => [
                                         'type' => 'select table',
                                         'title' => 'Location',
                                         'sources' => [
                                            'table' => 'locations',
                                            'column' => ['id', 'title'],
                                         ]
                                ],
                                'package.packages.image' => [
                                    'info' => 'Please use image in 270px X 220px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                    'file' => [
                                        'type' => 'image',
                                        'mimes' => ['jpg', 'jpeg', 'png'],
                                        'max' => 1024,
                                        'upload-dir' => 'site/uploads/images',
                                        'resize' => [
                                            'width' => 270,
                                            'height' => 220,
                                        ]
                                    ],
                                    'id'=>'image',
                                    'container'=>'form.images'
                                ],
                                'package.packages.title' => [
                                        'referrer' => '.seo-url'
                                ],
                                'package.packages.permalink' => [
                                        'type' => 'text',
                                        'class' => 'seo-url'
                                ],
                                'package.packages.description' => [
                                        'type' => 'textarea',
                                        'class' => 'ckeditor'
                                ],
                                'package.packages.sequence' => [
                                        'grouping-column' => 'id',
                                ],
                                'package.packages.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],


                'edit' => [
                        'form' => [
                                'attributes' => [
                                        'enctype' => 'multipart/form-data',
                                ],
                                'package.packages.category_id' => [
                                         'type' => 'select table',
                                         'title' => 'Category',
                                         'sources' => [
                                            'table' => 'categories',
                                            'column' => ['id', 'title'],
                                         ]
                                ],
                                'package.packages.location_id' => [
                                         'type' => 'select table',
                                         'title' => 'Location',
                                         'sources' => [
                                            'table' => 'locations',
                                            'column' => ['id', 'title'],
                                         ]
                                ],
                                'package.packages.image' => [
                                    'info' => 'Please use image in 270px X 220px dimension, (format file: .png, .jpg, .jpeg | Max: 1MB)',
                                    'file' => [
                                        'type' => 'image',
                                        'mimes' => ['jpg', 'jpeg', 'png'],
                                        'max' => 1024,
                                        'upload-dir' => 'site/uploads/images',
                                        'resize' => [
                                            'width' => 270,
                                            'height' => 220,
                                        ]
                                    ],
                                    'id'=>'image',
                                    'container'=>'form.images',
                                    'required' => false,
                                    'ignored' => true
                                ],
                                'package.packages.title' => [
                                        'referrer' => '.seo-url'
                                ],
                                'package.packages.permalink' => [
                                        'type' => 'text',
                                        'class' => 'seo-url'
                                ],
                                'package.packages.description' => [
                                        'type' => 'textarea',
                                        'class' => 'ckeditor'
                                ],
                                'package.packages.sequence' => [
                                        'grouping-column' => 'id',
                                ],
                                'package.packages.is_active'=> [
                                        'value' => 1
                                ],
                        ]
                ],
                'activeness',
                'delete'
        ]
];
