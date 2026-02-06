<?php
require 'connexion.php';

try {
//derena UPDATE w zedena fatima//
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
//INSERT//
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

//DELETE//

$stmt = $pdo->prepare(
    "DELETE FROM Utilisateur 
     WHERE id = :id"
);

$stmt->execute([
    'id' => 3
]);

echo " utilisateur supprimé <br>";
