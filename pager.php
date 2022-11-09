<?php if ($prev = $pager->prev): ?>
  <a class="gray" href="<?= $prev->link; ?>" rel="prev">
    &#x00AB; <?= $prev->title ?? i('Previous'); ?>
  </a>
<?php else: ?>
  <span></span>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
  <a class="gray" href="<?= $next->link; ?>" rel="next">
    <?= $next->title ?? i('Next'); ?> &#x00BB;
  </a>
<?php else: ?>
  <span></span>
<?php endif; ?>