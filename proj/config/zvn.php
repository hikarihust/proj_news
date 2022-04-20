<?php

return [
    'url' => [
        'prefix_admin' => 'admin'
    ],
    'format' => [
        'long_time' => 'H:m:s d/m/Y',
        'short_time' => 'd/m/Y'
    ],
    'template' => [
        'status' => [
            'all' => ['name' => 'Tất cả phần tử', 'class' => 'btn-success'],
            'active' => ['name' => 'Kích hoạt', 'class' => 'btn-success'],
            'inactive' => ['name' => 'Chưa kích hoạt', 'class' => 'btn-info'],
            'block' => ['name' => 'Bị khóa', 'class' => 'btn-danger'],
            'default' => ['name' => 'Chưa xác định', 'class' => 'btn-info'],
        ],
        'button' => [
            'edit'   => ['class' => 'btn-success', 'title' => 'Edit', 'icon' => 'fa-pencil', 'route-name' => '/form'],
            'delete' => ['class' => 'btn-danger btn-delete', 'title' => 'Delete', 'icon' => 'fa-trash', 'route-name' => '/delete'],
            'info'   => ['class' => 'btn-info', 'title' => 'View', 'icon' => 'fa-pencil', 'route-name' => '/delete']
        ]
    ],
    'config' => [
        'button' => [
            'default' => ['edit', 'delete'],
            'slider'  =>  ['edit', 'delete'],
            'category'  =>  ['edit', 'delete'],
            'article'  =>  ['edit', 'delete'],
            'user'  =>  ['edit']
        ]
    ]
];
