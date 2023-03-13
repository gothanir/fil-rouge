<?php 

if (isset($POST["submit"])) {
    if ( isset($POST["nom"] ) || !empty($POST["nom"])) {
    $sqlQuery = 'INSERT INTO categories (name) VALUES (:name)';
    } else {
        echo '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}
var_dump($POST["submit"]);
var_dump($POST["name"]);