<?php $title = "admin"; ?>

<?php ob_start(); ?>
<a class="add" href="index.php?page=subCat">retourner a la gestion des sous-categorie</a>
<form method="POST" class="addForm">
    <select name="id">
        <option value="none">choisir une categorie</option>
        <?php
        foreach ( $categories as $categorie) {
            ?>
            <option value="<?php echo $categorie["id"] ?>"><?php echo $categorie["name"] ?></option>";
            <?php
        }
        ?>
    </select>
    <input class="addInput" type="text" name="name" placeholder="nom de la sous-categorie"></input>
    <button class="addButton" type="submit" name="submit" >Ajouter la sous-categorie</button>
</form>

<?=$msg?>
<?php 
$content = ob_get_clean();
require('layout.php') ;
?>
