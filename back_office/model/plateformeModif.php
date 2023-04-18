<?php 
$msg='';
if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) && !empty($_POST["name"])) {
        $query = 'UPDATE plateformes SET name = :name WHERE id = :id';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        if($req) {
            
            $msg= '<div class="success text-success">les nom de la plateforme a etait modifier avec succées.</div>';
            header('Refresh:2 ; URL=index.php?page=plateforme');

        }
    } else {
        $msg= '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}