<?= self::before(); ?>
<article>
  <header>
    <h1><a href="<?= $page->link ?: $page->url; ?>"><?= $page->title; ?></a></h1>
    <?php if ($site->has('parent')): ?>
    <time datetime="<?= $page->time->ISO8601; ?>"><?= $page->time($state->skin->date_format); ?></time>
    <?php endif; ?>
  </header>
  <div><?= $page->content; ?></div>
</article>
<?= self::after(); ?>