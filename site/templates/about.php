<?php snippet('header') ?>

<p>
  <a href="<?= $site->url() ?>">
    <?= $page->title()->kirbytext() ?>
  </a>
</p>
<p>
  <?= $page->text()->kirbytext() ?>
</p>


<?php snippet('footer') ?>
