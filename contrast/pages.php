<?= self::before(); ?>
<article class="archive">
  <header>
    <h1><?= $page->title; ?></h1>
  </header>
  <?php $format = $state->skin->date_format; foreach ($pages as $page): ?>
  <div>
    <time datetime="<?= $page->time->ISO8601; ?>"><?= $page->time($format); ?></time>
    <h3><a href="<?= $page->link ?: $page->url; ?>"><?= $page->title; ?></a></h3>
  </div>
  <?php endforeach; ?>
</article>
<?= self::after(); ?>