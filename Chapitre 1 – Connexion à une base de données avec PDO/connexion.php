<?php
$host = 'localhost';
$dbname = 'blogdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base $dbname";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
/* fax kanfeteh [http://localhost/Connecter%20une%20application%20%C3%A0%20une%20base%20de%20donn%C3%A9es(php3)/Chapitre%201%20%E2%80%93%20Connexion%20%C3%A0%20une%20base%20de%20donn%C3%A9es%20avec%20PDO/connexion.php]
kayetele3 liya message fih "Connexion réussie à la base blogdb"*/