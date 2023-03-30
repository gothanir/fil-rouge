<?php 

$id = strval($_GET["idPicture"]);

$query = 'SELECT * FROM pictures WHERE id = :id' ;
$PictureStatement = $db->prepare($query);
$PictureStatement->bindValue(':id', $id, PDO::PARAM_STR);
$PictureStatement->execute();
$picture = $PictureStatement->fetch();