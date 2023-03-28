<?php 
    $title = "admin";

    ob_start();
    $pictureName = $pictures["name"]; 
?>



<a class="add" href="index.php?page=pictureCate">retourner a la gestion des images</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" value="<?php echo $pictureName ?>"></input>
    <button class="addButton" type="submit" name="submit">modifier l'image</button>
</form>
<?=$msg?>
<?php 
    $content = ob_get_clean();
    require('layout.php') ;
?>