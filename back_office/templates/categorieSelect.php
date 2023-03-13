<?php 
    $title = "admin";
    require('../../model/categorieSelect.php');
    ob_start(); 
?>
<a class="add" href="index?page=addCat">Ajout de categorie</a>
<table>
    <?php 
    foreach ( $categories as $categorie) {
        ?>
        <tr>
            <td><div><?php $categorie["name"] ?></div></td>
            <td><a class="modif" href="modifCat" >MODIFIER</a></td>
            <td><a class="suppr" href="supprCat" >SUPPRIMER</a></td>
        </tr>
        <?php
    }
    ?>
<table>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>