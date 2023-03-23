<?php 

if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) && !empty($_POST["name"]) && $_POST["id"] != "none" ) {
        $query = 'INSERT INTO sous_categories (name,id_categorie) VALUES (:name,:id_cat)';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $id = htmlspecialchars($_POST["id"]);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->bindValue(':id_cat', $id, PDO::PARAM_STR);
        $req->execute();
        if($req) {
            echo '<div class="error text-success">erreur : veuiller remplir tout les champs.</div>';
        }
    } else {
        echo '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}