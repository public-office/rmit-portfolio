<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title><?php echo $site->title()->html() ?></title>
  <meta property="og:title" content="<?php echo $site->title()->html(); ?>" />
  <meta property="og:site_name" content="<?php echo $site->title()->html(); ?>" />
  <meta property="og:url" content="<?php echo url(); ?>" />
  <meta property="og:type" content="website" />
  <meta name="description" content="<?php echo $site->description()->html(); ?>" />
  <meta property="og:description" content="<?php echo $site->description()->html(); ?>" />
  <meta content="<?php echo $site->title()->html(); ?>" property="twitter:title" />
  <meta content="<?php echo $site->description()->html(); ?>" property="twitter:description" />
  <meta content="summary_large_image" property="twitter:card" />
  <link rel="canonical" href="<?php echo url(); ?>" />
  <link rel="stylesheet" href="<?php echo url('assets/css/style.css'); ?>" />
  <style type="text/css">
    <?= $site->styles() ?>
  </style>
  <?= $site->header_text() ?>
</head>
<body data-page="<?php echo $page->slug(); ?>">
