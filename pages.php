<?= self::enter(); ?>
<article>
  <?php if ($page->exist): ?>
    <header>
      <h1>
        <?= $page->title ?: i('Posts'); ?>
      </h1>
      <p>
        <?= $page->description; ?>
      </p>
    </header>
    <?php if ($pages->count): ?>
      <ul class="archive">
        <?php foreach ($pages as $page2): ?>
          <li>
            <time datetime="<?= eat($page2->time->format('c')); ?>">
              <?= $page2->time('%Y-%m-%d'); ?>
            </time> <a href="<?= eat($page2->link ?: $page2->url); ?>">
              <?= $page2->title; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      <?= $page->content; ?>
    <?php else: ?>
      <?php if ($site->has('part')): ?>
        <p>
          <?= i('No more %s to show.', 'pages'); ?>
        </p>
      <?php else: ?>
        <p>
          <?= i('No %s yet.', 'pages'); ?>
        </p>
      <?php endif; ?>
    <?php endif; ?>
  <?php else: ?>
    <header>
      <h1>
        <?= i('Error'); ?>
      </h1>
      <p>
        <?= i('%s does not exist.', 'Page'); ?>
      </p>
    </header>
  <?php endif; ?>
</article>
<?= self::exit(); ?>