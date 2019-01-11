<?php static::header(); ?>
<article class="archive">
  <header>
    <h1><?php echo $page->title; ?></h1>
  </header>
  <?php $format = $state->date_format; foreach ($pages as $page): ?>
  <div>
    <time datetime="<?php echo $page->time->W3C; ?>"><?php echo $page->time($format); ?></time>
    <h3><a href="<?php echo $page->link ?: $page->url; ?>"><?php echo $page->title; ?></a></h3>
  </div>
  <?php endforeach; ?>
</article>
<?php static::footer(); ?>