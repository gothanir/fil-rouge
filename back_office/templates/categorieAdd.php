<?php $title = "admin"; ?>

<?php ob_start(); ?>
<a class="add" href="index.php?page=cat">retourner a la gestion des categorie</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" placeholder="nom de la categorie"></input>
    <button class="addButton" type="submit" name="submit" >Ajouter la categorie</button>
</form>

<?=$msg?>
<?php 
$content = ob_get_clean();
require('layout.php') ;
?>
