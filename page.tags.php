<?php

if (!empty($tags)) {
    $out = [];
    foreach ($tags as $tag) {
        $out[] = '<a href="' . eat($tag->link) . '" rel="tag">' . u($tag->title) . '</a>';
    }
    echo $out ? '<span class="categories">' . implode(', ', $out) . '</span>' : "";
}