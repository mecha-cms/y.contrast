<?php if ($site->is('home')): ?>
  <span><?php echo $language->home; ?></span>
<?php else: ?>
  <a href="<?php echo $url; ?>"><?php echo $language->home; ?></a>
<?php endif; ?>
<?php if ($menus = Get::pages(PAGE, 'page', [1, 'slug'])->vomit()): ?>
  <?php $i = 2; $limit = is_int($state->nav) ? $state->nav : 4; ?>
  <?php foreach ($menus as $menu): ?>
  <?php if ($menu === $site->path) continue; ?>
  <?php if ($limit && $i > $limit) break; ?>
  <?php

  $m = Page::open(PAGE . DS . $menu . '.page')->get([
      'link' => null,
      'title' => To::title($menu),
      'url' => null
  ]);

  ?>
    <?php if ($menu === $url->path || strpos($url->path . '/', $menu . '/') === 0): ?>
    <span><?php echo $m['title']; ?></span>
    <?php else: ?>
    <a href="<?php echo $m['link'] ?: $m['url']; ?>"><?php echo $m['title']; ?></a>
    <?php endif; ?>
  <?php ++$i; endforeach; ?>
<?php endif; ?>