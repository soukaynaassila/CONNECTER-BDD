<?php
require 'connexion.php';

try {

    //  requête fiha error 
    $pdo->query("SELECT * FROM table_inexistante");

    echo "requête worked";

} catch (PDOException $e) {

    echo " error: " . $e->getMessage();
}
//we9a3e khata2 katele3 lina message fih ==> Table 'blogdb.table_inexistante' doesn't exist//