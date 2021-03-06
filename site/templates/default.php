<?php snippet('header') ?>

<header>
  <?php if($pages->find('about')->isVisible()): ?><?php echo $site->title() ?><?php endif ?>
  <?php if(!$pages->find('about')->isVisible()): ?><?= $pages->find('home')->text()->kirbytext() ?><?php endif ?>
</header>

<p>Projects <?php if($pages->find('about')->isVisible()): ?>/ <a href="<?php echo $site->url() ?>/about">About</a><?php endif ?> </p>

<main class="project-list <?= $site->project_list() == 'text' ? 'project-list--text-only' : '' ?>">
  <?php foreach($pages->find('projects')->children()->visible() as $project): ?>
    <a href="<?= $project->url() ?>">
      <?php if($project->images()->count()): ?>
        <img src="<?= $project->images()->first()->url() ?>" />
      <?php endif ?>
      <p><?= $project->year() ?>, <?= $project->title() ?>, <?= $project->category() ?></p>
    </a>
  <?php endforeach; ?>
</main>

<?php snippet('footer') ?>
