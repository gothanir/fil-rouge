<?php 
    $title = "admin";

    ob_start();
    $catName = $categorie["name"]; 
?>



<a class="add" href="index.php?page=subCat">retourner a la gestion des sous-categorie</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" value="<?php echo $catName ?>"></input>
    <button class="addButton" type="submit" name="submit">modifier la sous-categorie</button>
</form>
<?=$msg?>
<?php 
    $content = ob_get_clean();
    require('layout.php') ;
?>