<?php $title = "admin"; ?>

<?php ob_start(); ?>

<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" placeholder="nom de la categorie"></input>
    <button class="addButton" type="submit" name="submit">Ajouter la categorie</button>
</form>

<?php 
$content = ob_get_clean();
require('layout.php') ;
?>
