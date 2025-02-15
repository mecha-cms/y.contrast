<a<?= $site->is('home') ? ' class="current"' : ""; ?> href="<?= $url; ?>">
  <?= i('Home'); ?>
</a>
<?php $i = 2; $limit = is_int($state->y->contrast->{'nav-show'}) ? $state->y->contrast->{'nav-show'} : 4; ?>
<?php foreach ($links as $link): ?>
  <?php if ($limit && $i > $limit) break; ?>
  <?php $children = $link->children ?? false; ?>
  <a<?= $link->current ? ' class="current"' : ""; ?> href="<?= eat($link->link ?: ($link->url . ($children && $children->count ? '/1' : ""))); ?>">
    <?= $link->title; ?>
  </a>
<?php ++$i; endforeach; ?>