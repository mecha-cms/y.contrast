<?php

return [
    'x' => [
        'page' => [
            'page' => [
                'type' => 'Markdown',
                'chunk' => 20
            ]
        ]
    ],
    'skin' => [
        'header' => true,
        'nav' => 4,
        'links' => [
            'envelope' => [
                'title' => 'Email',
                'link' => 'mailto:you@example.com'
            ],
            'github' => [
                'title' => 'GitHub',
                'link' => 'https://github.com/mecha-cms/shield.contrast'
            ]
        ],
        'date_format' => '%B %d, %Y',
        'dark' => false,
    'style' => 'default' // `contrast`, `default`, `minimal`
    ]
];