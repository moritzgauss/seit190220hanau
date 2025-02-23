<?php snippet('header') ?>

<h1>Artikel einreichen</h1>

<div class="form-container">
    <form method="post" enctype="multipart/form-data">
        <label>Titel: <input type="text" name="title" required></label>
        <label>Untertitel: <input type="text" name="subtitle"></label>
        <label>Autor: <input type="text" name="author" required></label>
        <label>Datum: <input type="date" name="date" required value="<?= date('Y-m-d') ?>"></label>

        <label>Kategorie:
            <select name="category" required>
                <option value="News">News</option>
                <option value="Meinung">Meinung</option>
                <option value="Interview">Interview</option>
                <option value="Reportage">Reportage</option>
                <option value="Sonstiges">Sonstiges</option>
            </select>
        </label>

        <label>Artikelinhalt: <textarea name="text" required></textarea></label>
        <label>Bild: <input type="file" name="image"></label>
        <label>Tags: <input type="text" name="tags" placeholder="Tag1, Tag2, Tag3"></label>

        <button type="submit">Absenden</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = get('title');
    $subtitle = get('subtitle');
    $author = get('author');
    $date = get('date');
    $category = get('category');
    $text = get('text');
    $tags = get('tags');
    $image = $_FILES['image'] ?? null;

    $articles = page('artikel'); // Artikel-Ordner

    try {
        // Neuen Artikel erstellen
        $new = $articles->createChild([
            'slug' => str::slug($title),
            'template' => 'article',
            'content' => [
                'title' => $title,
                'subtitle' => $subtitle,
                'author' => $author,
                'date' => $date,
                'category' => $category,
                'text' => $text,
                'tags' => $tags
            ]
        ]);

        // Falls ein Bild hochgeladen wurde, speichere es
        if ($image && $image['size'] > 0) {
            $new->createFile([
                'source' => $image['tmp_name'],
                'filename' => $image['name']
            ]);
        }

        echo "<p class='success'>Artikel erfolgreich eingereicht!</p>";
    } catch (Exception $e) {
        echo "<p class='error'>Fehler: " . $e->getMessage() . "</p>";
    }
}
?>

<?php snippet('footer') ?>
