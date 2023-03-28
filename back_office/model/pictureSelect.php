<?php 

$sqlQuery = 'SELECT * FROM pictures' ;
$picturesStatement = $db->prepare($sqlQuery);
$picturesStatement->execute();
$pictures = $picturesStatement->fetchAll();