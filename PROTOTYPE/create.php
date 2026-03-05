<?php
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/errors.log');

require 'Article.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $article = new Article();
    $article->titre = $_POST['titre'];
    $article->contenu = $_POST['contenu'];
    $article->create();

    header("Location: index.php");
}
?>

<h2>Ajouter un article</h2>

<form method="POST">
    Titre:<br>
    <input type="text" name="titre" required><br><br>

    Contenu:<br>
    <textarea name="contenu" required></textarea><br><br>

    <button type="submit">Ajouter</button>
</form>