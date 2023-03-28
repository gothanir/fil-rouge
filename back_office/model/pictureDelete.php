<?php

if(isset($_GET["idPictureSuppr"])) {
    $id = intval($_GET["idPictureSuppr"]);
    $query = 'DELETE FROM pictures WHERE id = :id';
    $pictureStatement = $db->prepare($query);
    $pictureStatement->bindValue(':id', $id, PDO::PARAM_STR);
    $pictureStatement->execute();
    header('Location: index.php?page=cat');
}