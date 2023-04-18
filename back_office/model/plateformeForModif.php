<?php 

$id = strval($_GET["idPlateforme"]);

$query = 'SELECT * FROM plateformes WHERE id = :id' ;
$plateformeStatement = $db->prepare($query);
$plateformeStatement->bindValue(':id', $id, PDO::PARAM_STR);
$plateformeStatement->execute();
$plateforme = $plateformeStatement->fetch();