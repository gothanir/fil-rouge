<?php 
$msg='';
if (isset($_POST["submit"])) {
    if ( isset($_POST["name"] ) || !empty($_POST["name"])) {
        $query = 'UPDATE categories SET name = :name WHERE id = :id';
        $req = $db->prepare($query);
        $nom = htmlspecialchars($_POST["name"]);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        if($req) {
            
            $msg= '<div class="error text-success">les nom de la categorie a etait modifier avec succées.</div>';
            header('Refresh:3 ; URL=index.php?page=cat');

        }
    } else {
        $msg= '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}