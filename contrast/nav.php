<?php if ($site->is('home')): ?>
  <span><?= $language->home; ?></span>
<?php else: ?>
  <a href="<?= $url; ?>"><?= $language->home; ?></a>
<?php endif; ?>
<?php $i = 2; $limit = is_int($state->skin->nav) ? $state->skin->nav : 4; ?>
<?php foreach ($links as $link): ?>
  <?php if ($limit && $i > $limit) break; ?>
  <?php if ($link->active): ?>
  <span><?= $link->title; ?></span>
  <?php else: ?>
  <a href="<?= $link->link ?: $link->url; ?>"><?= $link->title; ?></a>
  <?php endif; ?>
<?php ++$i; endforeach; ?>