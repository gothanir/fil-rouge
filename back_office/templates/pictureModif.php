<?php 
    $title = "admin";
    ob_start();
?>



<a class="add" href="index.php?page=picture">retourner a la gestion des images</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" placeholder="<?php echo $picture["name"]; ?>"></input>
    <input class="addInput" type="text" name="description" placeholder="<?php echo $picture["description"]; ?>"></input>
    <input type="file" class="form-control" placeholder="images/exemple.php" name="chemin">
    <button class="addButton" type="submit" name="submit" >modifier l'images</button>
</form>
<?=$msg?>
<?php 
    $content = ob_get_clean();
    require('layout.php') ;
?>