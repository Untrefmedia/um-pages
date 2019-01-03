<?php

return [
    'menu' => [
        [
            'text'        => 'Pages',
            'url'         => 'admin/pages',
            'icon'        => 'file',
            'label'       => null,
            'label_color' => 'success',
            'submenu'     => [
                [
                    'text' => 'List',
                    'url'  => 'admin/pages'
                ],
                [
                    'text' => 'Create',
                    'url'  => 'admin/pages/create'
                ]
            ]
        ]
    ]
];
