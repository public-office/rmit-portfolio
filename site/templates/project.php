<?php snippet('header') ?>

<p>
  <a href="<?= $site->url() ?>">
    <?= $page->title()->kirbytext() ?>
  </a>
</p>
<?php if(!$page->year()->isEmpty() || !$page->category()->isEmpty()): ?>
<p>
   <?php if(!$page->category()->isEmpty() && !$page->year()->isEmpty()): ?><?php echo $page->year() ?>, <?php endif ?><?= $page->category() ?>
</p>
<?php endif ?>
<p>
  <?= $page->text()->kirbytext() ?>
</p>

<main class="image-list">
  <?php foreach($page->images() as $image): ?>
    <img src="<?= $image->url() ?>" />
  <?php endforeach; ?>
</main>

<?php snippet('footer') ?>
