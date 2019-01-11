<?php

Asset::set('css/contrast.min.css', 20);
Asset::set('css/contrast/' . ($state->style ?: 'default') . '.min.css', 20.1);

// For `panel` extension
if (Extend::exist('panel')) {
    if (!empty($_file) && $_file === __DIR__ . DS . 'state' . DS . 'config.php') {
        $styles = [];
        foreach (glob(__DIR__ . DS . 'asset' . DS . 'css' . DS . 'contrast' . DS . '*.min.css') as $v) {
            $styles[$v = basename($v, '.min.css')] = $v;
        }
        Config::set('panel.desk.body.tab.other.field', [
            'file[?][dark]' => ['title' => $language->is_dark],
            'file[?][date_format]' => [
                'title' => $language->the_date_format,
                'width' => false,
                'description' => '<a href="https://mecha-cms.com/reference/class/date/pattern" target="_blank">?</a>'
            ],
            'file[?][header]' => ['title' => $language->show_header],
            'file[?][links]' => ['hidden' => true],
            'file[?][nav]' => ['title' => $language->show_nav],
            'file[?][style]' => [
                'type' => 'select',
                'values' => $styles,
                'width' => false
            ]
        ]);
        Config::set('panel.desk.body.tab.links', [
            'field' => [
                'file[?][links][envelope]' => [
                    'title' => $language->the_links->envelope,
                    'type' => 'url',
                    'value' => $state->links['envelope'] ?? null,
                    'width' => true,
                    'stack' => 10
                ],
                'file[?][links][github]' => [
                    'title' => $language->the_links->github,
                    'type' => 'url',
                    'value' => $state->links['github'] ?? null,
                    'width' => true,
                    'stack' => 10.1
                ]
            ],
            'stack' => 20
        ]);
    }
}