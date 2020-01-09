<?php if ($prev = $pager->prev): ?>
<a class="gray" href="<?= $prev; ?>" rel="prev">
  &#x00AB; <?= $site->is('page') ? (new Page(LOT . DS . 'page' . DS . Path::R($prev, $url) . '.page'))->title : i('Previous'); ?>
</a>
<?php else: ?>
<span></span>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
<a class="gray" href="<?= $next; ?>" rel="next">
  <?= $site->is('page') ? (new Page(LOT . DS . 'page' . DS . Path::R($next, $url) . '.page'))->title : i('Next'); ?> &#x00BB;
</a>
<?php else: ?>
<span></span>
<?php endif; ?>
