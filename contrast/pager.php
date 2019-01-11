<?php if ($previous = $pager->previous): ?>
<a class="gray" href="<?php echo $previous; ?>" rel="prev">&#x00AB; <?php echo $site->is('pages') ? $language->previous : Page::open(PAGE . DS . Path::R($previous, $url, DS) . '.page')->title; ?></a>
<?php else: ?>
<span></span>
<?php endif; ?>
<?php if ($next = $pager->next): ?>
<a class="gray" href="<?php echo $next; ?>" rel="next"><?php echo $site->is('pages') ? $language->next : Page::open(PAGE . DS . Path::R($next, $url, DS) . '.page')->title; ?> &#x00BB;</a>
<?php else: ?>
<span></span>
<?php endif; ?>