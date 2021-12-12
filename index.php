<?php

$z = defined('TEST') && TEST ? '.' : '.min.';

Asset::set('css/layout' . $z . 'css', 20);
Asset::set('css/layout/icons' . $z . 'css', 20.1);
Asset::set('css/skin/' . ($state->layout->skin ?: 'minimal') . $z . 'css', 20.11);

// Create site link data to be used in navigation
$GLOBALS['links'] = new Anemone((static function($out, $state, $url) {
    $index = LOT . D . 'page' . strtr($state->route, '/', D) . '.page';
    foreach (g(LOT . D . 'page', 'page') as $k => $v) {
        // Exclude home page
        if ($k === $index) {
            continue;
        }
        $v = new Page($k);
        // Add current state
        $v->current = 0 === strpos($url->path . '/', '/' . $v->name . '/');
        $out[$k] = $v;
    }
    ksort($out);
    return $out;
})([], $state, $url));