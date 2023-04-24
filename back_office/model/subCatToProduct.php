<?php

require('../model/db_connect.php');

if(isset($_GET['identCat'])) {
    $categorie = intval($_GET['identCat']);
    $requete = $db->prepare("SELECT id , name FROM sous_categories WHERE id_categorie=:id_categorie");
    $requete->bindParam(':id_categorie', $categorie, PDO::PARAM_INT);
    $requete->execute();


    $data = json_encode($requete->fetchAll());
    echo $data;
} else {
    echo 'missing parameter';
}
?>