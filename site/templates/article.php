<?php snippet('header') ?>

<main class="article-container">
  <article class="article-content">
    <h1><?= $page->title() ?></h1>
    <p class="article-date"><?= $page->date()->toDate('d.m.Y') ?></p>

    <div class="richtext">
      <?= $page->text()->kt() ?>
    </div>
  </article>
</main>

<?php snippet('footer') ?>
