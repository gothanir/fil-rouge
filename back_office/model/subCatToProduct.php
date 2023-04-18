<?php

require '../config.php';

if(isset($_GET['identCat'])) {
    $categorie = intval($_GET['identCat']);
    $requete = $bdd->prepare("SELECT ident_sous_cat, sous_categorie FROM sous_categorie WHERE ident_cat=:ident_cat");
    $requete->bindParam(':ident_cat', $categorie, PDO::PARAM_INT);
    $requete->execute();


    $data = json_encode($requete->fetchAll());
    echo $data;
} else {
    echo 'missing parameter';
}
?>