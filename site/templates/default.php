<?php snippet('header') ?>


<p>
  <?php if($pages->find('about')->isVisible()): ?><?php echo $site->title() ?><?php endif ?>
  <?php if(!$pages->find('about')->isVisible()): ?><?= $pages->find('home')->text()->kirbytext() ?><?php endif ?>
</p>

<p>Projects <?php if($pages->find('about')->isVisible()): ?>/ <a href="<?php echo $site->url() ?>/about">About</a><?php endif ?> </p>

<main class="project-list <?= $site->project_list() == 'text' ? 'project-list--text-only' : '' ?>">
  <?php foreach($pages->find('projects')->children()->visible() as $project): ?>
    <a href="<?= $project->url() ?>">
      <img src="<?= $project->images()->first()->url() ?>" />
      <p><?= $project->year() ?>, <?= $project->title() ?>, <?= $project->category() ?></p>
    </a>
  <?php endforeach; ?>
</main>

<?php snippet('footer') ?>
