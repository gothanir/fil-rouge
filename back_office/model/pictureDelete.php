<?php

if(isset($_GET["idpicturesuppr"])) {
    $id = intval($_GET["idpicturesuppr"]);
    $query = 'DELETE FROM pictures WHERE id = :id';
    $pictureStatement = $db->prepare($query);
    $pictureStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $pictureStatement->execute();
    header('Location: index.php?page=picture');
}