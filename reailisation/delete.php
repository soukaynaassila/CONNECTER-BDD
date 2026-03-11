<?php
require 'Article.php';

if(isset($_GET['id'])){

    $article = new Article();
    $article->delete($_GET['id']);

    header("Location: index.php");
}
?>