<?php
require 'Article.php';

$article = new Article();

$id = $_GET['id'];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $article->titre = $_POST['titre'];
    $article->contenu = $_POST['contenu'];

    $article->update($id);

    header("Location: index.php");
}
?>

<h2>Modifier article</h2>

<form method="POST">

Titre:<br>
<input type="text" name="titre"><br><br>

Contenu:<br>
<textarea name="contenu"></textarea><br><br>

<button type="submit">Modifier</button>

</form>