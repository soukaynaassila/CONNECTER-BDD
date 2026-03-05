<?php
class Article {
    private $conn;
    private $table = "articles";

    public $titre;
    public $contenu;

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

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            'titre' => $this->titre,
            'contenu' => $this->contenu
        ]);

    } catch (PDOException $e) {

        error_log($e->getMessage());

        return false;
    }
}

    // Lister articles
    public function read() {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}