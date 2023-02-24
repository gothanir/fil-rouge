<?php $title = "conection"; ?>

<?php ob_start(); ?>

<header>
    <h1>Fil-rouge</h1>
    <p>Jeux</p>
    <p>Abonnement</p>
    <p>Launcher</p>
    <p>Support</p>
</header>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>