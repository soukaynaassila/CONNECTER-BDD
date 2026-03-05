<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
   <script src="js/script.js"></script> 
</body>
</html>
<?php
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/errors.log');

require 'Article.php';

$article = new Article();
$articles = $article->read();
?>

<h2>Liste des articles</h2>

<a href="create.php">Ajouter un article</a>
<hr>

<?php foreach ($articles as $a): ?>
    <h3><?= htmlspecialchars($a['titre']) ?></h3>
    <p><?= nl2br(htmlspecialchars($a['contenu'])) ?></p>
    <hr>
<?php endforeach; ?>
