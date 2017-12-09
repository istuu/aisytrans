<?php
/**
 * Created by PhpStorm
 * Date: 15/02/2017
 * Time: 21:29
 * Author: Daniel Simangunsong
 *
 * Calm seas, never make skill full sailors
 */

return [
        'names' => [
                'home' => [
                        'name' => 'Home',
                        'thumb' => ''
                ],
                'packages' => [
                        'name' => 'Packages',
                        'thumb' => ''
                ],
                'about' => [
                        'name' => 'About',
                        'thumb' => ''
                ],
                'contact' => [
                        'name' => 'Contact',
                        'thumb' => ''
                ],
        ],
        'sections' => [
                'slider' => [
                        'name' => 'Slider',
                        'limit' => 0,
                        'table' => [
                                'name' => 'sliders',
                                'sequence' => ['sequence'],
                                'where' => ['is_active' => 1]
                        ]
                ],
                'static' => [
                        'name' => 'Static',
                        'table' => [
                                'name' => 'statics',
                                'where' => ['is_active' => 1]
                        ]
                ],
                'feature' => [
                        'name' => 'Feature',
                        'limit' => 0,
                        'table' => [
                                'name' => 'features',
                                'sequence' => ['sequence'],
                                'where' => ['is_active' => 1]
                        ]
                ],
                'partner' => [
                        'name' => 'Partner',
                        'limit' => 0,
                        'table' => [
                                'name' => 'partners',
                                'sequence' => ['sequence'],
                                'where' => ['is_active' => 1]
                        ]
                ],
                'map' => [
                        'name' => 'Map',
                        'table' => [
                                'name' => 'maps',
                                'where' => ['is_active' => 1]
                        ]
                ],
        ],
        'modals' => [
                'default' => 'Are you sure you want to do this?',
                'delete' => 'This action will remove selected item from database, and cannot be undone. Do you want to continue ?',
        ]
];
