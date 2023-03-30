<?php

if(isset($_GET["idCategorieSuppr"])) {
    $id = intval($_GET["idCategorieSuppr"]);
    $query = 'DELETE FROM sous_categories WHERE id = :id';
    $categorieStatement = $db->prepare($query);
    $categorieStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $categorieStatement->execute();
    header('Location: index.php?page=subCat');
}