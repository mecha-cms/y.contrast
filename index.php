<?php

$states = [
    'x.comment.page.type' => 'Markdown',
    'x.page.page.type' => 'Markdown'
];

foreach ($states as $k => $v) {
    !State::get($k) && State::set($k, $v);
}

$z = defined('TEST') && TEST ? '.' : '.min.';
Asset::set(__DIR__ . D . 'icons' . $z . 'css', 20);
Asset::set(__DIR__ . D . 'index' . D . ($state->y->contrast->skin ?: 'minimal') . $z . 'css', 20.1);

// Create site link data to be used in navigation
lot('links', $links = new Anemone((static function ($links, $state, $url) {
    $index = LOT . D . 'page' . D . trim(strtr($state->route ?? 'index', '/', D), D) . '.page';
    $route = $url->path . '/';
    foreach (g(LOT . D . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add current state
        $v->current = 0 === strpos($route, $v->route . '/');
        $links[$k] = $v;
    }
    ksort($links);
    return $links;
})([], $state, $url)));