<?php if ($prev = $pager->prev): ?>
  <a class="gray" href="<?= eat($prev->link); ?>" rel="prev">
    &#x00ab; <?= $prev->title ?? i('Previous'); ?>
  </a>
<?php else: ?>
  <span></span>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
  <a class="gray" href="<?= eat($next->link); ?>" rel="next">
    <?= $next->title ?? i('Next'); ?> &#x00bb;
  </a>
<?php else: ?>
  <span></span>
<?php endif; ?>