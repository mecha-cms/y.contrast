<?php if ($prev = $pager->prev): ?>
<a class="gray" href="<?= $prev->url; ?>" rel="prev">
  &#x00AB; <?= $pager->prev->title ?? i('Previous'); ?>
</a>
<?php else: ?>
<span></span>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
<a class="gray" href="<?= $next->url; ?>" rel="next">
  <?= $pager->next->title ?? i('Next'); ?> &#x00BB;
</a>
<?php else: ?>
<span></span>
<?php endif; ?>