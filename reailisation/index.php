<?php

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . 'errors.log');
error_reporting(E_ALL);

require 'Article.php';

$article = new Article();
$articles = $article->read();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h2>Liste des articles</h2>

<a href="create.php" class="btn">Ajouter un article</a>

<hr>

<?php foreach ($articles as $a): ?>

    </div>
    <div class="article">
    <h3><?= htmlspecialchars($a['titre']) ?></h3>
    <p><?= nl2br(htmlspecialchars($a['contenu'])) ?></p>

    <a href="edit.php?id=<?= $a['id'] ?>">Modifier</a>
    |
    <a href="delete.php?id=<?= $a['id'] ?>" onclick="return confirm('Supprimer cet article ?')">Supprimer</a>

</div>

<?php endforeach; ?>

<script src="script.js"></script>

</body>
</html>