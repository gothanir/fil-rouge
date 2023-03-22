<?php

if(isset($_GET["idCategorieSuppr"])) {
    $id = intval($_GET["idCategorieSuppr"]);
    $query = 'DELETE FROM categories WHERE id = :id';
    $categorieStatement = $db->prepare($query);
    $categorieStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $categorieStatement->execute();
    header('Location: index.php?page=cat');
}