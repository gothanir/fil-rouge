<?php 
    $title = "admin";
    ob_start(); 
?>
<a class="add" href="index?page=productAdd">Ajout de produits</a>
<div  class="divTableCat" >
    <table class="tableCat">
        <?php
        foreach ( $products as $product) {
            ?>
            <tr>
                <td class="borderTD" ><div><?php echo $product["name"] ?></div></td>
                <td class="borderTD" ><div><?php echo $product["description"] ?></div></td>
                <td class="borderTD" ><a class="modif" href="index.php?page=modifproduct&idproduct=<?php echo $product['id']?>" >MODIFIER</a></td>
                <td class="borderTD" ><a class="suppr" href="index.php?page=product&idproductsuppr=<?php echo $product['id']?>" 
                onclick='return(confirm("Voulez-vous supprimer cette image ?"))'>SUPPRIMER</a></td>
            </tr>
            <?php
        }
        ?>
    <table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>