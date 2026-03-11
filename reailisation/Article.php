<?php
class Article {
    private $conn;
    private $table = "articles";//DECLARINA TABLE HENA BAX ILA BEGHINA MN BE3ED NDIRO FIH CHI MODIFICATION GHIR MN NEHENA

    public $titre;
    public $contenu;
//Constructor
    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=localhost;dbname=miniapp;charset=utf8",
                "root",
                ""
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    // Ajouter article
    public function create() {

    try {

        $sql = "INSERT INTO {$this->table} (titre, contenu)
                VALUES (:titre, :contenu)";

        $stmt = $this->conn->prepare($sql);//prepared statement bax n7ami application mn Injection

        return $stmt->execute([
            'titre' => $this->titre,
            'contenu' => $this->contenu
        ]);

    } catch (PDOException $e) {

        error_log($e->getMessage());

        return false;
    }
}

    // Lister articles hade l function katejib l articles mn db
    public function read() {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);//katereje3 les result 3ela chekel array associative
    }
    // Modifier article
public function update($id) {

    $sql = "UPDATE {$this->table} 
            SET titre = :titre, contenu = :contenu
            WHERE id = :id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        'id' => $id,
        'titre' => $this->titre,
        'contenu' => $this->contenu
    ]);
}


// Supprimer article
public function delete($id) {

    $sql = "DELETE FROM {$this->table} WHERE id = :id";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        'id' => $id
    ]);
}
}