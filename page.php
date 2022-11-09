<?= self::enter(); ?>
<article>
  <?php if ($page->exist): ?>
    <header>
      <?= self::get('page.tags', ['tags' => $page->tags]); ?>
      <h1>
        <?= $page->title; ?>
      </h1>
      <?php if ($site->has('parent')): ?>
        <time datetime="<?= $page->time->ISO8601; ?>">
            <?= $page->time($site->y->contrast->{'date-format'}); ?>
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
  <?php else: ?>
    <header>
      <h1>
        <?= i('Error'); ?>
      </h1>
    </header>
    <div>
      <p>
        <?= i('%s does not exist.', 'Page'); ?>
      </p>
    </div>
  <?php endif; ?>
</article>
<?= self::exit(); ?>