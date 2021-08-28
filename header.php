<header<?= !empty($site->layout->{'title-show'}) && !empty($site->layout->{'icons-show'}) ? ' class="full"' : ""; ?>>
  <?php if (!empty($site->layout->{'title-show'})): ?>
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
  <?php if (!empty($site->layout->{'nav-show'})): ?>
  <nav>
    <?= self::nav(); ?>
  </nav>
  <?php endif; ?>
  <?php if (!empty($site->layout->{'icons-show'})): ?>
  <nav class="icons">
    <?= self::icons(); ?>
  </nav>
  <?php endif; ?>
</header>