<?php namespace y\contrast;

$states = [
    'x.comment.page.type' => 'Markdown',
    'x.page.page.type' => 'Markdown'
];

foreach ($states as $k => $v) {
    !\State::get($k) && \State::set($k, $v);
}

$z = \defined("\\TEST") && \TEST ? '.' : '.min.';
\Asset::set(__DIR__ . \D . 'icons' . $z . 'css', 20);
\Asset::set(__DIR__ . \D . 'index' . \D . ($state->y->contrast->skin ?: 'minimal') . $z . 'css', 20.1);

// Create site link data to be used in navigation
\lot('links', new \Anemone(\fire(function ($r) use ($state) {
    $route_current = $this->path . '/';
    $route_r = '/' . \trim($state->route ?? 'index', '/');
    foreach (\g(\LOT . \D . 'page', 'page') as $k => $v) {
        $v = new \Page($k);
        // Exclude home page
        if ($route_r === ($route = $v->route)) {
            continue;
        }
        // Add current state
        $v->current = 0 === \strpos($route_current, $route . '/');
        $r[$v->title . \P . $k] = $v;
    }
    \ksort($r);
    return \array_values($r);
}, [[]], $url)));