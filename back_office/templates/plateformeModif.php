<?php 
    $title = "admin";

    ob_start();
    $plateformeName = $plateforme["name"]; 
?>



<a class="add" href="index.php?page=plateforme">retourner a la gestion des plateforme</a>
<form method="POST" class="addForm">
    <input class="addInput" type="text" name="name" value="<?php echo $plateformeName  ?>"></input>
    <button class="addButton" type="submit" name="submit">modifier la plateforme</button>
</form>
<?=$msg?>
<?php 
    $content = ob_get_clean();
    require('layout.php') ;
?>