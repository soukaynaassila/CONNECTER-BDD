<?php
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/errors.log');

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

    <div class="article">
        <h3><?= htmlspecialchars($a['titre']) ?></h3>
        <p><?= nl2br(htmlspecialchars($a['contenu'])) ?></p>
    </div>

<?php endforeach; ?>

<script src="script.js"></script>

</body>
</html>