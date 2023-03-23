<?php

function categorieName($id,$db) {
    $sqlQuery = 'SELECT * FROM categories WHERE id = :id' ;
    $categoriesStatement = $db->prepare($sqlQuery);
    $categoriesStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $categoriesStatement->execute();
    $categorie = $categoriesStatement->fetch();
    echo $categorie['name'];
}