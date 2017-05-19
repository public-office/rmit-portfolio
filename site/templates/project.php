<?php snippet('header') ?>

<p>
  <a href="<?= $site->url() ?>">
    <?= $page->title()->kirbytext() ?>
  </a>
</p>
<p><?= $page->year() ?>, <?= $page->category() ?></p>
<p>
  <?= $page->text()->kirbytext() ?>
</p>

<main class="image-list">
  <?php foreach($page->images() as $image): ?>
    <img src="<?= $image->url() ?>" />
  <?php endforeach; ?>
</main>

<?php snippet('footer') ?>
