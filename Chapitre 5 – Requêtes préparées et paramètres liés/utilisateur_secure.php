<?php
require 'connexion.php';
//INSERT sécurisé (paramètres nommés)
$stmt = $pdo->prepare(
    "INSERT INTO Utilisateur (nom, email)
     VALUES (:nom, :email)"
);

$stmt->execute([
    'nom' => 'Assila',
    'email' => 'assila@test.com'
]);

echo "Utilisateur ajouté <br>";

//bindParam()
$nom = 'souki';
$email = 'souki@test.com';

$stmt = $pdo->prepare(
    "INSERT INTO Utilisateur (nom, email)
     VALUES (:nom, :email)"
);

$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);

$stmt->execute();

echo "Utilisateur ajouté avec bindParam <br>";

//SELECT sécurisé//
$stmt = $pdo->prepare(
    "SELECT * FROM Utilisateur WHERE email = :email"
);

$stmt->execute([
    'email' => 'alice@test.com'
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

echo "Nom : " . $user['nom'];

//paramètres anonymes(?)

$stmt = $pdo->prepare(
    "SELECT * FROM Utilisateur WHERE id = ?"
);

$stmt->execute([1]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

echo $user['nom'];
