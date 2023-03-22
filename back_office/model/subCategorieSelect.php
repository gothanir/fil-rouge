<?php 

$sqlQuery = 'SELECT * FROM sous_categories' ;
$categoriesStatement = $db->prepare($sqlQuery);
$categoriesStatement->execute();
$categories = $categoriesStatement->fetchAll();