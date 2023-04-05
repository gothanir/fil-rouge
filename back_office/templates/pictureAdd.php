<?php $title = "admin"; ?>

<?php ob_start(); ?>
<a class="add" href="index.php?page=picture">retourner a la gestion des images</a>
<form method="POST" class="addForm" enctype="multipart/form-data" >
    <input class="addInput" type="text" name="name" placeholder="nom de l'images"></input>
    <input class="addInput" type="text" name="description" placeholder="description"></input>
    <input type="file" class="form-control" name="chemin">
    <button class="addButton" type="submit" name="submit" >Ajouter l'images</button>
</form>

<?=$msg?>
<?php 
$content = ob_get_clean();
require('layout.php') ;
?>
