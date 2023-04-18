<?php $title = "admin"; ?>

<?php ob_start(); ?>
<a class="add" href="index.php?page=plateforme">retourner a la gestion des plateforme</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" placeholder="nom de la plateforme"></input>
    <button class="addButton" type="submit" name="submit" >Ajouter la plateforme</button>
</form>

<?=$msg?>
<?php 
$content = ob_get_clean();
require('layout.php') ;
?>
