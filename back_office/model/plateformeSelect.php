<?php 

$sqlQuery = 'SELECT * FROM plateformes' ;
$plateformesStatement = $db->prepare($sqlQuery);
$plateformesStatement->execute();
$plateformes = $plateformesStatement->fetchAll();