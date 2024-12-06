<!DOCTYPE html>
<html class>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
    <?php if ($v = w($page->description ?? $site->description)): ?>
      <meta content="<?= $v; ?>" name="description">
    <?php endif; ?>
    <?php if ('archive' === $page->x): ?>
      <!-- Prevent search engines from indexing pages with `archive` state -->
      <meta content="noindex" name="robots">
    <?php endif; ?>
    <meta content="<?= eat($page->author); ?>" name="author">
    <title>
      <?= w($t->reverse->join(' - ')); ?>
    </title>
    <link href="<?= eat($url . '/favicon.ico'); ?>" rel="icon">
    <link href="<?= eat($url->current(false, false)); ?>" rel="canonical">
  </head>
  <body>
    <?= self::header(); ?>