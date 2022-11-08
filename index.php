<?php

$z = defined('TEST') && TEST ? '.' : '.min.';

Asset::set(__DIR__ . D . 'icons' . $z . 'css', 20.1);
Asset::set(__DIR__ . D . 'index' . $z . 'css', 20);
Asset::set(__DIR__ . D . 'skin' . D . ($state->y->contrast->skin ?: 'minimal') . $z . 'css', 20.11);

// Create site link data to be used in navigation
$GLOBALS['links'] = new Anemone((static function ($links, $state, $url) {
    $index = LOT . D . 'page' . D . trim(strtr($state->route, '/', D), D) . '.page';
    $path = $url->path . '/';
    foreach (g(LOT . D . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add current state
        $v->current = 0 === strpos($path, '/' . $v->name . '/');
        $links[$k] = $v;
    }
    ksort($links);
    return $links;
})([], $state, $url));