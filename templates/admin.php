<?php $title = "admin"; ?>

<?php ob_start(); ?>

<header>
    <p href="index.php">Gestion categorie</p>
    <p>Gestion produit</p>
</header>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>