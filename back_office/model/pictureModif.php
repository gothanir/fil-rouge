<?php 
$msg='';
if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) && !empty($_POST["name"]) &&  isset($_POST["description"] ) && !empty($_POST["description"]) &&  isset($_POST["chemin"] ) && !empty($_POST["chemin"])) {
        $query = 'UPDATE pictures SET name = :name, chemin = :chemin, description = :description WHERE id = :id';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $chemin = htmlspecialchars($_POST["chemin"]);
        $description = htmlspecialchars($_POST["description"]);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->bindValue(':chemin', $chemin, PDO::PARAM_STR);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        if($req) {
            
            $msg= '<div class="success text-success">l\'image a etait modifier avec succées.</div>';
            header('Refresh:2 ; URL=index.php?page=picture');

        }
    } else {
        $msg= '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}