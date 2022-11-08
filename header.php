<header<?= !empty($site->y->contrast->{'title-show'}) && !empty($site->y->contrast->{'icons-show'}) ? ' class="full"' : ""; ?>>
    <?php if (!empty($site->y->contrast->{'title-show'})): ?>
    <h2 title="<?= w($site->description ?? ""); ?>">
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
  <?php if (!empty($site->y->contrast->{'nav-show'})): ?>
    <nav>
      <?= self::nav(); ?>
    </nav>
  <?php endif; ?>
  <?php if (!empty($site->y->contrast->{'icons-show'})): ?>
    <nav class="icons">
      <?= self::icons(); ?>
    </nav>
  <?php endif; ?>
</header>