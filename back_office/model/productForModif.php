<?php 

$id = strval($_GET["idproduct"]);

$query = 'SELECT * FROM products WHERE id = :id' ;
$productStatement = $db->prepare($query);
$productStatement->bindValue(':id', $id, PDO::PARAM_STR);
$productStatement->execute();
$product = $productStatement->fetch();