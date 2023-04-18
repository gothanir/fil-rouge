<?php 
    $title = "admin";
    ob_start(); 
?>
<a class="add" href="index?page=addPlateforme">Ajout de plateforme</a>
<div  class="divTableCat" >
    <table class="tableCat">
        <?php 
        foreach ( $plateformes as $plateforme) {
            ?>
            <tr>
                <td class="borderTD" ><div><?php echo $plateforme["name"] ?></div></td>
                <td class="borderTD" ><a class="modif" href="index.php?page=modifPlateforme&idPlateforme=<?php echo $plateforme['id']?>" >MODIFIER</a></td>
                <td class="borderTD" ><a class="suppr" href="index.php?page=plateforme&idPlateformeSuppr=<?php echo $plateforme['id']?>"
                 onclick='return(confirm("Voulez-vous supprimer cet plateforme ?"))' >SUPPRIMER</a></td>
            </tr>
            <?php
        }
        ?>
    <table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>