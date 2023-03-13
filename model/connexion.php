<?php
$sqlQuery = 'SELECT * FROM clients WHERE mail = :mail AND mdp = :password ' ;
$clientsStatement = $db->prepare($sqlQuery);
$clientsStatement->execute();
$clients = $clientsStatement->fetchAll();