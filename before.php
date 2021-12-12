<!DOCTYPE html>
<html class="<?= $state->layout->dark ? 'dark' : 'light'; ?>" dir="<?= $site->direction; ?>" lang="<?= $site->language; ?>">
  <head>
    <meta charset="<?= $site->charset; ?>">
    <meta content="Mecha <?= VERSION; ?>" name="generator">
    <meta content="width=device-width" name="viewport">
    <?php if ($w = w($page->description ?? $site->description)): ?>
      <meta content="<?= $w; ?>" name="description">
    <?php endif; ?>
    <?php if ('archive' === $page->x): ?>
      <!-- Prevent search engines from indexing pages with `archive` state -->
      <meta content="noindex" name="robots">
    <?php endif; ?>
    <meta content="<?= $page->author; ?>" name="author">
    <title><?= w($t->reverse->join(' | ')); ?></title>
    <link href="<?= $url; ?>/favicon.ico" rel="shortcut icon">
    <link href="<?= $url->current(false, false); ?>" rel="canonical">
  </head>
  <body>
    <?= self::header(); ?>