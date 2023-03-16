<?php 
    $title = "admin";

    ob_start();
    $catName = $categorie["name"]; 
?>



<a class="add" href="index.php?page=cat">retourner a la gestion des categorie</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" value="<?php echo $catName ?>"></input>
    <button class="addButton" type="submit" name="submit">modifier la categorie</button>
</form>
<?=$msg?>
<?php 
    $content = ob_get_clean();
    require('layout.php') ;
?>