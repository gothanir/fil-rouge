<?php

if(isset($_GET["idCategorieSuppr"])) {
    $id = strval($_GET["idCategorieSuppr"]);
    
    if(is_numeric($id)) {
        if(isset($_GET["confirm"]) && $_GET["confirm"] == "true") {
            $query = 'DELETE FROM categories WHERE id = :id';
            $categorieStatement = $db->prepare($query);
            $categorieStatement->bindValue(':id', $id, PDO::PARAM_STR);
            $categorieStatement->execute();
            header('Location: index.php?page=cat');
            exit();
        } else {
            echo '<script>';
            echo 'if(confirm("Voulez-vous vraiment supprimer cette catégorie ?")) {';
            echo 'window.location.href = "index.php?page=cat&idCategorieSuppr=' . $id . '&confirm=true";';
            echo '} else {';
            echo 'window.location.href = "index.php?page=cat";';
            echo '}';
            echo '</script>';
        }
    }
}