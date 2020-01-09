<header<?= $site->layout->header && $site->layout->links ? ' class="full"' : ""; ?>>
  <?php if ($state->layout->header): ?>
  <h2 title="<?= w($site->description); ?>">
    <?php if ($site->is('home')): ?>
    <span>
      <?= $site->title; ?>
    </span>
    <?php else: ?>
    <a href="<?= $url; ?>">
      <?= $site->title; ?>
    </a>
    <?php endif; ?>
  </h2>
  <?php endif; ?>
  <?php if ($state->layout->nav): ?>
  <nav>
    <?= self::nav(); ?>
  </nav>
  <?php endif; ?>
  <?php if ($state->layout->links): ?>
  <nav class="icons">
    <?= self::links(); ?>
  </nav>
  <?php endif; ?>
</header>
