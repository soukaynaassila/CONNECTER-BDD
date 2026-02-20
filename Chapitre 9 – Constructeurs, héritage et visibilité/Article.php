<?php
//Constructor :hiya function auto fax kandir new Article
class Article {
//protected :kateseta3emel dakhile l class w dakhile l class li weret meneha faqat
    protected $titre;
    protected $contenu;

    public function __construct($titre, $contenu) {
        $this->titre = $titre;
        $this->contenu = $contenu;
    }

    public function afficher() {
        return "Titre : " . $this->titre .
               " - Contenu : " . $this->contenu;
    }
}
