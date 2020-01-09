<?= self::before(); ?>
<article>
  <header>
    <?= self::get('page.tags', ['tags' => $page->tags]); ?>
    <h1>
      <?= $page->title; ?>
    </h1>
    <?php if ($site->has('parent')): ?>
    <time datetime="<?= $page->time->ISO8601; ?>">
      <?= $page->time($site->layout->{'date-format'}); ?>
    </time>
    <?php endif; ?>
  </header>
  <div>
    <?= $page->content; ?>
  </div>
  <?php if ($site->has('parent') && !empty($state->x->comment)): ?>
  <hr>
  <div>
    <?= self::comments(); ?>
  </div>
  <?php endif; ?>
</article>
<?= self::after(); ?>
