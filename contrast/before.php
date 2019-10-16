<!DOCTYPE html>
<html lang="<?= $site->language; ?>" dir="<?= $site->direction; ?>" class>
  <head>
    <meta charset="<?= $site->charset; ?>">
    <meta name="viewport" content="width=device-width">
    <?php if ($s = To::text($page->description($site->description))): ?>
    <meta name="description" content="<?= $s; ?>">
    <?php endif; ?>
    <?php if ($page->x === 'archive'): ?>
    <!-- Prevent search engines from indexing pages with `archive` state -->
    <meta name="robots" content="noindex">
    <?php endif; ?>
    <meta name="author" content="<?= $page->author; ?>">
    <title><?= w($t->reverse->join(' | ')); ?></title>
    <link href="<?= $url; ?>/favicon.ico" rel="shortcut icon">
    <link href="<?= $url->clean; ?>" rel="canonical">
  </head>
  <body class="<?= $state->skin->dark ? 'dark' : 'light'; ?>">
    <header>
      <?php if ($state->skin->header): ?>
      <h1 title="<?= w($site->description); ?>">
        <?php if ($site->is('home')): ?>
        <span><?= $site->title; ?></span>
        <?php else: ?>
        <a href="<?= $url; ?>"><?= $site->title; ?></a>
        <?php endif; ?>
      </h1>
      <?php endif; ?>
      <?php if ($state->skin->nav): ?>
      <nav><?= self::nav(); ?></nav>
      <?php endif; ?>
      <?php if ($state->skin->links): ?>
      <nav><?= self::links(); ?></nav>
      <?php endif; ?>
    </header>