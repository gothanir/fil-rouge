<?php $title = "admin"; ?>

<?php ob_start(); ?>

<header>
    <p href="index.php">Retour a l'admin</p>
</header>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>