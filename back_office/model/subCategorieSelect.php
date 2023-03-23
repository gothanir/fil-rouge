<?php 

$sqlQuery = 'SELECT * FROM sous_categories' ;
$subCategoriesStatement = $db->prepare($sqlQuery);
$subCategoriesStatement->execute();
$subCategories = $subCategoriesStatement->fetchAll();