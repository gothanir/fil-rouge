<?php

if(isset($_GET["idPlateformeSuppr"])) {
    $id = intval($_GET["idPlateformeSuppr"]);
    $query = 'DELETE FROM plateformes WHERE id = :id';
    $plateformeStatement = $db->prepare($query);
    $plateformeStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $plateformeStatement->execute();
    header('Location: index.php?page=plateforme');
}