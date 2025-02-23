<?php snippet('header') ?>

<h1>Archiv</h1>

<table class="archive-table">
    <thead>
        <tr>
            <th>Titel</th>
            <th>Datum</th>
            <th>Autor</th>
            <th>Tags</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach (page('archiv')->children() as $post): ?>
      <tr>
                <td><a href="<?= $post->url() ?>"><?= $post->title() ?></a></td>
                <td><?= $post->date()->toDate('d.m.Y') ?></td>
                <td><?= $post->tags()->isNotEmpty() ? implode(', ', $post->tags()->split(',')) : '–' ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php snippet('footer') ?>
