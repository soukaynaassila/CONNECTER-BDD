<?php

require 'Article.php';
//BlogArticle kayakhed l khasa2ise w les function deyal l parent deyalo
class BlogArticle extends Article {

    private $auteur;

    public function __construct($titre, $contenu, $auteur) {

        parent::__construct($titre, $contenu);

        $this->auteur = $auteur;
    }
//Redéfinition (surcharge) ye3eni ne3awedo nketbo nefesse l function walakin nzido 3eliha chi haja fblogArticle
    public function afficher() {

        return parent::afficher() . //khedina afficher deyal lparent w zedena 3leha auteur
               " - Auteur : " . $this->auteur;
    }
}
