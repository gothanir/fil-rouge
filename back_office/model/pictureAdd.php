<?php 

if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) && !empty($_POST["name"]) && isset($_POST["description"])  && !empty($_POST["description"]) && isset($_POST["chemin"])  && !empty($_POST["chemin"])) {
        $query = 'INSERT INTO pictures (name,description,chemin) VALUES (:name,:description,:chemin)';
        $req = $db->prepare($query);
        $name = htmlspecialchars($_POST["name"]);
        $description = htmlspecialchars($_POST["description"]);
        $chemin = htmlspecialchars($_POST["chemin"]);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':chemin', $chemin, PDO::PARAM_STR);
        $req->execute();
        if($req) {
            echo '<div class="error text-success">erreur : veuiller remplir tout les champs.</div>';
        }
    } else {
        echo '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}