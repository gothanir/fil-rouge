<?php $title = "admin"; ?>

<?php ob_start(); ?>
<a class="add" href="index.php?page=subCat">retourner a la gestion des images</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" placeholder="nom de l'images"></input>
    <input class="addInput" type="text" name="description" placeholder="description"></input>
    <input class="addInput" type="text" name="chemin" placeholder="chemin de l'images"></input>
    <button class="addButton" type="submit" name="submit" >Ajouter l'images</button>
</form>


<?php 
$content = ob_get_clean();
require('layout.php') ;
?>
