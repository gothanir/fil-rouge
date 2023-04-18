<?php 
$msg = "";
if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) && !empty($_POST["name"])) {
        $query = 'INSERT INTO plateformes (name) VALUES (:name)';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->execute();
        if($req) {
            $msg = '<div class="success text-success">plateforme ajouter.</div>';
        }
    } else {
        $msg = '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}