<?php static::header(); ?>
<article>
  <header>
    <h1><a href="<?php echo $page->link ?: $page->url; ?>"><?php echo $page->title; ?></a></h1>
    <?php if ($site->has('parent')): ?>
    <time datetime="<?php echo $page->time->ISO8601; ?>"><?php echo $page->time($state->date_format); ?></time>
    <?php endif; ?>
  </header>
  <div><?php echo $page->content; ?></div>
</article>
<?php static::footer(); ?>