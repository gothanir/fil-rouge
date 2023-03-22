<?php 
    $title = "admin";
    ob_start(); 
?>
<a class="add" href="index?page=subAddCat">Ajout de sous-categorie</a>
<div  class="divTableCat" >
    <table class="tableCat">
        <?php 
        foreach ( $subCategories as $subCategorie) {
            ?>
            <tr>
                <td class="borderTD" ><div><?php echo $categorie["name"] ?></div></td>
                <td class="borderTD" ><a class="modif" href="index.php?page=subModifCat&idCategorie=<?php echo $categorie['id']?>" >MODIFIER</a></td>
                <td class="borderTD" ><a class="suppr" href="index.php?page=subCat&idCategorieSuppr=<?php echo $categorie['id']?>" >SUPPRIMER</a></td>
            </tr>
            <?php
        }
        ?>
    <table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>