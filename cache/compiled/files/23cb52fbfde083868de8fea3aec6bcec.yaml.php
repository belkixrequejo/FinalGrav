<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/grav/user/themes/big-picture/blueprints.yaml',
    'modified' => 1583192080,
    'data' => [
        'name' => 'Big Picture',
        'description' => 'Grav Theme based on Big Picture HTML theme of html5up.net.',
        'version' => '1.4.1',
        'icon' => 'photo',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'flatfiledeveloper@gmail.com',
            'url' => 'https://flatfiledeveloper.com'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-big-picture',
        'demo' => 'https://grav-theme-big-picture.flatfiledeveloper.com',
        'keywords' => 'big, picture, theme, modern, fast, responsive, html5, css3, one, single, page',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-big-picture/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'favicon' => [
                    'type' => 'file',
                    'label' => 'THEME_BIG_PICTURE.FAVICON',
                    'destination' => 'user/themes/big-picture/images',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'error_background_image' => [
                    'type' => 'file',
                    'label' => 'THEME_BIG_PICTURE.ERROR_BACKGROUND_IMAGE',
                    'destination' => 'user/themes/big-picture/images',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'footer_icons' => [
                    'type' => 'list',
                    'label' => 'THEME_BIG_PICTURE.FOOTER_ICONS',
                    'help' => 'THEME_BIG_PICTURE.FOOTER_ICONS_HELP',
                    'fields' => [
                        '.icon' => [
                            'type' => 'text',
                            'label' => 'THEME_BIG_PICTURE.FOOTER_ICONS_ICON',
                            'placeholder' => 'fa-facebook'
                        ],
                        '.link' => [
                            'type' => 'text',
                            'label' => 'THEME_BIG_PICTURE.FOOTER_ICONS_LINK',
                            'placeholder' => 'THEME_BIG_PICTURE.FOOTER_ICONS_LINK_HELP'
                        ]
                    ]
                ],
                'footer_items' => [
                    'type' => 'list',
                    'label' => 'THEME_BIG_PICTURE.FOOTER_ITEMS',
                    'help' => 'THEME_BIG_PICTURE.FOOTER_ITEMS_HELP',
                    'fields' => [
                        '.item' => [
                            'type' => 'textarea',
                            'label' => 'THEME_BIG_PICTURE.FOOTER_ITEMS_ITEM',
                            'help' => 'THEME_BIG_PICTURE.FOOTER_ITEMS_ITEM_HELP',
                            'placeholder' => 'THEME_BIG_PICTURE.FOOTER_ITEMS_ITEM_HELP'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
