<?php if ($prev = $pager->prev): ?>
<a class="gray" href="<?= $prev; ?>" rel="prev">&#x00AB; <?= $site->is('page') ? (new Page(PAGE . DS . Path::R(Path::F($prev, DS), $url) . '.page'))->title : $language->prev; ?></a>
<?php else: ?>
<span></span>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
<a class="gray" href="<?= $next; ?>" rel="next"><?= $site->is('page') ? (new Page(PAGE . DS . Path::R(Path::F($next, DS), $url) . '.page'))->title : $language->next; ?> &#x00BB;</a>
<?php else: ?>
<span></span>
<?php endif; ?>