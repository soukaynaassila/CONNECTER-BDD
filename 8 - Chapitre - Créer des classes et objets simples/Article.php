<?php

class Article {

    public $title;
    public $content;
    public $price;

    public function afficherArticle() {
        echo "Title: " . $this->title . "<br>";
        echo "Content: " . $this->content . "<br>";
        echo "Price: " . $this->price . "<br>";
    }
//FUNCTION BAX NBEDELO L PRIX
    public function modifierPrix($nouveauPrix) {
        $this->price = $nouveauPrix;//KANBRDELO PRIX L9EDIM B JEDIDE
    }
}
//GHA NDIRO NEW OBEJECT ANESEMIWEH ARTICLE1
$article1 = new Article();

$article1->title = "T-shirt SOUKAYNA"; //3ETITO TITEL
$article1->content = "Cotton t-shirt"; //W CONTENOU
$article1->price = 120;//W PRICE

$article1->afficherArticle();// 3EYETE 3ELA FUNCTION AFFICHERARTICEL BAX TETEBE3 LME3ELOMAT

$article1->modifierPrix(100);//3EYETE 3ELA MODIFIEPRIX W 3ETITEHA 100 BAX TEBEDEL LIYA L PRIX MN 120 L 100

$article1->afficherArticle();//WEREJE3ET 3EYET 3ELA afficherArticle BAX DIR UPDAT
