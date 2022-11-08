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
    <ul class="archive">
      <?php foreach ($pages as $page2): ?>
        <li>
          <time datetime="<?= $page2->time->ISO8601; ?>">
            <?= $page2->time('%Y-%m-%d'); ?>
          </time> <a href="<?= $page2->link ?: $page2->url; ?>"><?= $page2->title; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
    <?= $page->content; ?>
  <?php else: ?>
    <header>
      <h1>
        <?= i('Error'); ?>
      </h1>
      <?php if ($site->has('part')): ?>
        <p>
          <?= i('No more %s to show.', 'pages'); ?>
        </p>
      <?php else: ?>
        <p>
          <?= i('No %s yet.', 'pages'); ?>
        </p>
      <?php endif; ?>
    </header>
  <?php endif; ?>
</article>
<?= self::exit(); ?>