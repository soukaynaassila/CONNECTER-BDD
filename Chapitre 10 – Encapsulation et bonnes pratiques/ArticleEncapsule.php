<?php
class Article {
    private $titre;
    private $contenu;
//setter= methot :katebedel lvaleur
/*hena kaytchekiliya titre -machi khawi w akebar mn 3 dl are9am*/
    public function setTitre($titre) {
        if (!empty($titre) && strlen($titre) > 3) {
            $this->titre = $titre;
        } else {
            echo "Titre invalide.";
        }
    }
//Getter = method katere9a lina valeur
    public function getTitre() {
        return $this->titre;
    }

    public function setContenu($contenu) {
        $this->contenu = htmlspecialchars($contenu);
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function afficher() {
        return "Titre : {$this->titre} - Contenu : {$this->contenu}";
    }
}
