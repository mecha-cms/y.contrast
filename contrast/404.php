<?php static::header(); ?>
<article>
  <header>
    <h1>404</h1>
  </header>
  <div>
    <p><?php echo To::sentence($language->_finded, ' :('); ?></p>
  </div>
</article>
<?php static::footer(); ?>