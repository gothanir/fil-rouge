<?php $title = "Back Office"; ?>

<?php ob_start(); ?>

<h1>Bienvenue sur le Back Office</h1>
    
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>