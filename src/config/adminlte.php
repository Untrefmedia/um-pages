<?php

return [
    'menu' => [
        [
            'text'        => 'Pages',
            'url'         => 'admin/page',
            'icon'        => 'file',
            'label'       => null,
            'label_color' => 'success',
            'submenu'     => [
                [
                    'text' => 'List',
                    'url'  => 'admin/page'
                ],
                [
                    'text' => 'Create',
                    'url'  => 'admin/page/create'
                ]
            ],
            'can'         => 'venue-create' //momentaneo hasta crear el permiso correspondiente
        ]
    ]
];
