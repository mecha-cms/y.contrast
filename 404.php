<?= self::before(); ?>
<article>
  <header>
    <h1>404</h1>
  </header>
  <div>
    <p><?= rtrim(i('%s not found.', ['Page']), '.'); ?> :(</p>
  </div>
</article>
<?= self::after(); ?>
