<?php

if (!empty($tags) && $tags->count) {
    $out = [];
    foreach ($tags->sort([1, 'title']) as $tag) {
        $out[] = '<a href="' . eat($tag->link) . '" rel="tag">' . u($tag->title) . '</a>';
    }
    echo $out ? '<span class="categories">' . implode(', ', $out) . '</span>' : "";
}