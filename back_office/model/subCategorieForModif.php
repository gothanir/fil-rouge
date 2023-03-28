<?php 

$id = strval($_GET["idCategorie"]);

$query = 'SELECT * FROM sous_categories WHERE id = :id' ;
$categorieStatement = $db->prepare($query);
$categorieStatement->bindValue(':id', $id, PDO::PARAM_STR);
$categorieStatement->execute();
$categorie = $categorieStatement->fetch();