<?php 

if (isset($_POST["submit"])) {
    
    if ( isset($_POST["name"] ) && !empty($_POST["name"]) && isset($_POST["description"])  && !empty($_POST["description"])) {

        if (isset($_FILES['chemin']) && $_FILES['chemin']['error'] == 0) {

            if ($_FILES['chemin']['size'] <= 1000000) {

                $fileInfo = pathinfo($_FILES['chemin']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];

                if (in_array($extension, $allowedExtensions)) {

                    $chemin = '../../uploads/' .$nom. '.'.$extension;
                    move_uploaded_file($_FILES['chemin']['tmp_name'], $chemin);

                    $query = 'INSERT INTO pictures (name,description,chemin) VALUES (:name,:description,:chemin)';
                    $req = $db->prepare($query);
                    $name = htmlspecialchars($_POST["name"]);
                    $description = htmlspecialchars($_POST["description"]);
                    $chemin = htmlspecialchars($_POST["chemin"]);
                    $req->bindValue(':name', $name, PDO::PARAM_STR);
                    $req->bindValue(':description', $description, PDO::PARAM_STR);
                    $req->bindValue(':chemin', $chemin, PDO::PARAM_STR);
                    $req->execute();

                } else {
                    echo "<div class='errorRed'>erreur :l\'extension n'est pas accepter !";
                }
            } else {
                echo '<div class="errorRed">erreur : le fichier est trop lourd.</div>';
            }
            if($req) {
                echo '<div class="errorRed">erreur : veuiller remplir tout les champs.</div>';
            }
        } else {
            echo '<div class="errorRed">erreur : veuiller remplir tout les champs.</div>';
        }
    }  
}