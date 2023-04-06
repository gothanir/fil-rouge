<?php 

$sqlQuery = 'SELECT * FROM products' ;
$productsStatement = $db->prepare($sqlQuery);
$productsStatement->execute();
$products = $productsStatement->fetchAll();