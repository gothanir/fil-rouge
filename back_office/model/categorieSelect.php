<?php 

$sqlQuery = 'SELECT * FROM categories' ;
$categoriesStatement = $db->prepare($sqlQuery);
$categoriesStatement->execute();
$categories = $categoriesStatement->fetchAll();