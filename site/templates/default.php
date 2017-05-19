<?php snippet('header') ?>

<p>
  <?= $pages->find('home')->text()->kirbytext() ?>
</p>

<main class="project-list <?= $site->project_list() == 'text' ? 'project-list--text-only' : '' ?>">
  <?php foreach($pages->find('projects')->children()->visible() as $project): ?>
    <a href="<?= $project->url() ?>">
      <img src="<?= $project->images()->first()->url() ?>" />
      <p><?= $project->year() ?>, <?= $project->title() ?>, <?= $project->category() ?></p>
    </a>
  <?php endforeach; ?>
</main>

<?php snippet('footer') ?>
