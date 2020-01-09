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
    'layout' => [
        'header' => true,
        'icons' => true,
        'nav' => 4,
        'links' => [
            'envelope' => [
                'title' => 'Email',
                'link' => 'mailto:you@example.com'
            ],
            'github' => [
                'title' => 'GitHub',
                'link' => 'https://github.com/mecha-cms/layout.contrast'
            ]
        ],
        'date-format' => '%B %d, %Y',
        'dark' => false, // Prefer dark mode by default? (applies only to web browsers that does not have support dark mode feature)
        'style' => 'contrast' // `contrast`, `minimal`
    ]
];
