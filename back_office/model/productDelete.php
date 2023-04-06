<?php

if(isset($_GET["idproductsuppr"])) {
    $id = intval($_GET["idproductsuppr"]);
    $query = 'DELETE FROM products WHERE id = :id';
    $productStatement = $db->prepare($query);
    $productStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $productStatement->execute();
    header('Location: index.php?page=product');
}