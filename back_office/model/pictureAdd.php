<?php 
$msg='';
if (isset($_POST["submit"])) {
    
    if ( isset($_POST["name"] ) && !empty($_POST["name"]) && isset($_POST["description"])  && !empty($_POST["description"])) {

        if (isset($_FILES['chemin']) && $_FILES['chemin']['error'] == 0) {

            if ($_FILES['chemin']['size'] <= 1000000) {

                $fileInfo = pathinfo($_FILES['chemin']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];

                if (in_array($extension, $allowedExtensions)) {

                    $nom = $_FILES['chemin']['name'];
                    $chemin = '../assets/uploads/' .$nom;
                    $cheminMove = '../../assets/uploads/' .$nom;
                    move_uploaded_file($_FILES['chemin']['tmp_name'], $cheminMove);

                    $query = 'INSERT INTO pictures (name,description,chemin) VALUES (:name,:description,:chemin)';
                    $req = $db->prepare($query);
                    $name = htmlspecialchars($_POST["name"]);
                    $description = htmlspecialchars($_POST["description"]);
                    $req->bindValue(':name', $name, PDO::PARAM_STR);
                    $req->bindValue(':description', $description, PDO::PARAM_STR);
                    $req->bindValue(':chemin', $chemin, PDO::PARAM_STR);
                    $req->execute();

                } else {
                    $msg= "<div class='error'>erreur :l\'extension n'est pas accepter !";
                }
            } else {
                $msg= '<div class="error">erreur : le fichier est trop lourd.</div>';
            }
        } else {
            $msg= '<div class="error">erreur : veuiller remplir tout les champs.</div>';
        }
    }
}