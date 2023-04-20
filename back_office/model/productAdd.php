<?php 
$msg='';
if (isset($_POST["submit"])) {
    
    if  (   
            isset($_POST["name"] ) && !empty($_POST["name"]) && 
            isset($_POST["description"])  && !empty($_POST["description"]) &&
            isset($_POST["price"])  && !empty($_POST["price"]) &&
            isset($_POST["idCat"])  && $_POST["idCat"] != "none" &&
            isset($_POST["idSubCat"])  && $_POST["idSubCat"] != "none"

        ) {

            $query = 'INSERT INTO products (name,description,price,idCat,idSubCat) VALUES (:name,:description,:price,:idCat,:idSubCat)';
            $req = $db->prepare($query);

            $name = htmlspecialchars($_POST["name"]);
            $description = htmlspecialchars($_POST["description"]);
            $price = htmlspecialchars($_POST["price"]);
            $idCat = htmlspecialchars($_POST["idCat"]);
            $idSubCat = htmlspecialchars($_POST["idSubCat"]);
            
            $req->bindValue(':name', $name, PDO::PARAM_STR);
            $req->bindValue(':description', $description, PDO::PARAM_STR);
            $req->bindValue(':price', $price, PDO::PARAM_STR);
            $req->bindValue(':idSubCat', $idSubCat, PDO::PARAM_STR);

            $req->execute();     
        }
    } else {
         $msg= '<div class="error">erreur : veuiller remplir tout les champs.</div>';
}
