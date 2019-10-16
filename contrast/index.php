<?php

Asset::set('css/contrast.min.css', 20);
Asset::set('css/contrast/' . ($state->skin->style ?: 'default') . '.min.css', 20.1);

// Create site navigation data to be used in content
$GLOBALS['links'] = map(Pages::from(PAGE)->is(function($v) use($state) {
    $folder = PAGE . strtr($state->path, '/', DS);
    return $v !== $folder . '.page' && $v !== $folder . '.archive'; // Remove home page
})->get(), function($v) use($url) {
    $v = new Page($v);
    $v->active = strpos($url->path . '/', '/' . $v->name . '/') === 0; // Active state
    return $v;
});

if (State::get('x.panel') !== null && isset($_['path']) && $_['path'] === '/.state') {
    Language::set([
        'field-description-dark-mode' => 'Dark mode',
        'field:skin-style' => [
            'lot' => [
                'contrast' => 'Contrast',
                'default' => 'Default',
                'minimal' => 'Minimal'
            ]
        ]
    ]);
    Hook::set('set', function() use($language, $state) {
        $GLOBALS['_']['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['skin'] = [
            'lot' => [
                'fields' => [
                    'type' => 'Fields',
                    'lot' => [
                        'style' => [
                            'type' => 'Item',
                            'name' => 'state[skin][style]',
                            'value' => $state->skin->style,
                            'lot' => (array) Language::get('field:skin-style.lot'),
                            'stack' => 10
                        ],
                        // An unchecked checkbox must generate a `false` value
                        'dark-false' => [
                            'type' => 'Hidden',
                            'name' => 'state[skin][dark]',
                            'value' => 'false'
                        ],
                        'dark-true' => [
                            'type' => 'Toggle',
                            'title' => "",
                            'description' => $language->fieldDescriptionDarkMode,
                            'name' => 'state[skin][dark]',
                            'value' => $state->skin->dark,
                            'stack' => 20
                        ]
                    ]
                ]
            ],
            'stack' => 50
        ];
    }, 0);
}