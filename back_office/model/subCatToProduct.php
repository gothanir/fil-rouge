<?php

require('../model/categorieSelect.php');

if(isset($_GET['identCat'])) {
    $categorie = intval($_GET['identCat']);
    $requete = $bdd->prepare("SELECT id, name FROM sous_categories WHERE ident_cat=:id_categorie");
    $requete->bindParam(':id_categorie', $categorie, PDO::PARAM_INT);
    $requete->execute();


    $data = json_encode($requete->fetchAll());
    echo $data;
} else {
    echo 'missing parameter';
}
?>