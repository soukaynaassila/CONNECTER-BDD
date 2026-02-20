<?php
/*kayekhedem constructor deyali BlogArticle
 w hewa kaye3eyet 3ela constructor deyal l Article */
require 'BlogArticle.php';
/*kayete3emero : titre,contenu,auteur*/
$article = new BlogArticle(
    "POO en PHP",
    "Découvrir l'héritage.",
    "Alice"
);

echo $article->afficher();
