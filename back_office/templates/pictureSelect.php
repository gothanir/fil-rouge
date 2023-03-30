<?php 
    $title = "admin";
    ob_start(); 
?>
<a class="add" href="index?page=pictureAdd">Ajout d'image</a>
<div  class="divTableCat" >
    <table class="tableCat">
        <?php 
        foreach ( $pictures as $picture) {
            ?>
            <tr>
                <td class="borderTD" ><div><?php echo $picture["name"] ?></div></td>
                <td class="borderTD" ><div><?php echo $picture["description"] ?></div></td>
                <td class="borderTD" ><div><?php echo $picture["chemin"] ?></div></td>
                <td class="borderTD" ><img src="<?php echo $picture['chemin'] ?>"></div></td>
                <td class="borderTD" ><a class="modif" href="index.php?page=modifPicture&idPicture=<?php echo $picture['id']?>" >MODIFIER</a></td>
                <td class="borderTD" ><a class="suppr" href="index.php?page=picture&idpicturesuppr=<?php echo $picture['id']?>" 
                onclick='return(confirm("Voulez-vous supprimer cette image ?"))'>SUPPRIMER</a></td>
            </tr>
            <?php
        }
        ?>
    <table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>