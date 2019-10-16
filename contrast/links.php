<?php $icons = Asset::URL($f = __DIR__ . DS . 'asset' . DS . 'svg' . DS . 'icons.svg') . '?v=' . filemtime($f); ?>
<?php foreach (array_filter((array) $state->skin->links) as $k => $v): ?>
<a class="icon" href="<?= $v; ?>">
  <svg><use href="<?= $icons; ?>#<?= $k; ?>"></use></svg>
</a>
<?php endforeach; ?>
<?php if ($rss = State::get('x.feed.path.rss')): ?>
<a class="icon" href="<?= $url->clean . $rss; ?>">
  <svg><use href="<?= $icons; ?>#rss"></use></svg>
</a>
<?php endif; ?>