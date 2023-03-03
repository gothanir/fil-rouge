<?php
 
if (isset($_POST["password"]) || isset($_POST["mail"])) {
    if ( ) {
        $sqlQuery = 'SELECT FROM admins WHERE mail = :mail AND mdp = :password ' ;
        $adminStatement = $db->prepare($sqlQuery);
        $adminStatement->execute();
        $admin = $adminStatement->fetchAll();
    } else {
        echo "se compte admin n'existe pas";
    }
} else {
    echo "veuiller remplir tout les champs";
}
