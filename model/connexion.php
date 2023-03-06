<?php
$sqlQuery = 'SELECT * FROM clients WHERE mail = :mail AND mdp = :password ' ;
$stagiairesStatement = $db->prepare($sqlQuery);
$stagiairesStatement->execute();
$stagiaires = $stagiairesStatement->fetchAll();