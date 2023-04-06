<?php 
    $title = "admin";
    ob_start();
?>



<a class="add" href="index.php?page=product">retourner a la gestion des produits</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" placeholder="<?php echo $product["name"]; ?>"></input>
    <input class="addInput" type="text" name="description" placeholder="<?php echo $product["description"]; ?>"></input>
    <button class="addButton" type="submit" name="submit" >modifier le produit</button>
</form>
<?=$msg?>
<?php 
    $content = ob_get_clean();
    require('layout.php') ;
?>