<?php 
    $title = "admin";
    ob_start(); 
?>
<a class="add" href="index?page=addCat">Ajout de categorie</a>
<div  class="divTableCat" >
    <table class="tableCat">
        <?php 
        foreach ( $categories as $categorie) {
            ?>
            <tr>
                <td class="borderTD" ><div><?php echo $categorie["name"] ?></div></td>
                <td class="borderTD" ><a class="modif" href="index.php?page=modifCat&idCategorie=<?php echo $categorie['id']?>" >MODIFIER</a></td>
                <td class="borderTD" ><a class="suppr" href="index.php?page=cat&idCategorieSuppr=<?php echo $categorie['id']?>"
                 onclick='return(confirm("Voulez-vous supprimer cet utilisateur ?"))' >SUPPRIMER</a></td>
            </tr>
            <?php
        }
        ?>
    <table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>