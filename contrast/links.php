<?php $icons = Asset::URL($f = __DIR__ . DS . 'asset' . DS . 'svg' . DS . 'icons.svg') . '?v=' . filemtime($f); ?>
<?php foreach (array_filter((array) $state->links) as $k => $v): ?>
<a class="icon" href="<?php echo $v; ?>">
  <svg><use href="<?php echo $icons; ?>#<?php echo $k; ?>"></use></svg>
</a>
<?php endforeach; ?>
<?php if (Extend::exist('feed')): ?>
<a class="icon" href="<?php echo $url->clean . '/' . Extend::state('feed', 'path')['rss']; ?>">
  <svg><use href="<?php echo $icons; ?>#rss"></use></svg>
</a>
<?php endif; ?>