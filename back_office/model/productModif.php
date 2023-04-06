<?php 
$msg='';
if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) && !empty($_POST["name"]) &&  isset($_POST["description"] ) && !empty($_POST["description"])) {
        $query = 'UPDATE products SET name = :name, description = :description WHERE id = :id';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $description = htmlspecialchars($_POST["description"]);
        $req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        if($req) {
            
            $msg= '<div class="error text-success">l\'image a etait modifier avec succées.</div>';
            header('Refresh:2 ; URL=index.php?page=product');

        }
    } else {
        $msg= '<div class="errorRed">erreur : veuiller remplir tout les champs.</div>';
    }
}