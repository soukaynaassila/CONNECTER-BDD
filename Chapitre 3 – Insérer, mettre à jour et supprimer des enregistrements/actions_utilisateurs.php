<?php
require 'connexion.php';

try {

    $stmt = $pdo->prepare(
        "INSERT INTO Utilisateur (nom, email) 
         VALUES (:nom, :email)"
    );

    $stmt->execute([
        'nom' => 'FATIMA',
        'email' => 'FATIMA@test.com'
    ]);

    echo " utilisateur ajouté avec succès<br>";

} catch (PDOException $e) {
    echo "erreur : " . $e->getMessage();
}
// hade ch li kayetele3 f localhost :Connexion réussie à la base blogdb utilisateur ajouté avec succès//

$stmt = $pdo->prepare(
    "UPDATE Utilisateur 
     SET email = :email 
     WHERE id = :id"
);

$stmt->execute([
    'email' => 'FATIMAAA.new@test.com',
    'id' => 3
]);

echo " utilisateur modifié <br>";

