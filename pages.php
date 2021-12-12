<?= self::before(); ?>
<article>
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
</article>
<?= self::after(); ?>