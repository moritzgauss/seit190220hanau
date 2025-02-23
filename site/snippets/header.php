<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title()->esc() ?> – <?= $page->title()->esc() ?></title>
    <link rel="stylesheet" href="<?= url('assets/css/index.css') ?>">
    <link rel="stylesheet" href="<?= url('assets/css/header.css') ?>">
    <link rel="stylesheet" href="<?= url('assets/css/footer.css') ?>">
    <link rel="stylesheet" href="<?= url('assets/css/article.css') ?>">
    <link rel="stylesheet" href="<?= url('assets/css/submit.css') ?>">
</head>

<body>

    <header class="header">
    <a class="header-title" href="<?= url('home') ?>"><?= $site->title() ?></a>
    <nav class="nav">
        <div class="nav-links">
        <a href="<?= url('search') ?>">Suche</a>
        <a href="<?= url('einreichen') ?>">Einreichen</a>
        <a href="<?= url('archiv') ?>">Archiv</a>
        </div>
    </nav>

</header>
