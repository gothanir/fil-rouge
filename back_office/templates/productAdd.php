<?php $title = "admin"; ?>

<?php ob_start(); ?>
<a class="add" href="index.php?page=product">retourner a la gestion des produits</a>
<form method="POST" class="addForm" enctype="multipart/form-data" >
    <input class="addInput" type="text" name="name" placeholder="nom du produits"></input>
    <input class="addInput" type="text" name="description" placeholder="description"></input>
    <input class="addInput" type="number" name="price" placeholder="prix du produit"></input>

    <select class="addInput" id="cat"  name="idCat">
        <option value="none">choisir une categorie</option>
        <?php
        foreach ( $categories as $categorie) {
            ?>
            <option value="<?php echo $categorie["id"] ?>"><?php echo $categorie["name"] ?></option>";
            <?php
        }
        ?>
    </select>

    <select class="addInput" id="sc"  name="idSubCat">
        <option value="none">choisir une sous-categorie</option>
    </select>

    <?php
    foreach ( $plateformes as $plateforme) {
        ?>
        
        <?php echo $plateforme["name"] ?><input type="checkbox" name="idOption" value="<?php echo $plateforme["id"] ?>">
        
        <?php
        }
        ?>
    
    <button class="addButton" type="submit" name="submit" >Ajouter le produits</button>
    <input class="hidden" type="text" name="ident_product" value="<?php echo time(); ?>"></input>
</form>

<script>
    window.addEventListener('load', () => {
        const cat = document.getElementById('cat');
        const sc = document.getElementById('sc');
        cat.addEventListener('change', ()  => {
            sc.disabled = true;
            $.get('../model/subCatToProduct.php', {
                identCat: cat.value
            }).done((data) => {
                sc.innerHTML = '';
                JSON.parse(data).forEach((e) => {
                    let subcat = document.createElement('OPTION');
                    subcat.value = e.ident_sous_cat;
                    let txt = document.createTextNode(e.sous_categorie);
                    subcat.appendChild(txt);
                    sc.appendChild(subcat);
                });
                if (cat.value == 'Sélectionnez la catégorie') {
                        sc.disabled = true;
                        let opt = document.createElement('OPTION');
                        opt.innerHTML = 'Sélectionnez la sous-catégorie';
                        sc.appendChild(opt);
                    } else {
                        sc.disabled = false;
                    }
                
            });
        });
    });
</script>


<?=$msg?>
<?php
$content = ob_get_clean();
require('layout.php') ;
?>