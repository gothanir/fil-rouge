<?php 

if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) || !empty($_POST["name"])) {
        $query = 'INSERT INTO sous_categories (name) VALUES (:name)';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->execute();
        if($req) {
            echo '<div class="error text-success">erreur : veuiller remplir tout les champs.</div>';
        }
    } else {
        echo '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}