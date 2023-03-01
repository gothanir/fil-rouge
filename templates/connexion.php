<?php $title = "connexion"; ?>

<?php ob_start(); ?>

<div class="littleBody">
    <div class="flex">
        <p>Connexion</p>
        <a class="right" href="">Creer un compte</a>
    </div>
    <form class="connexionForm">
        <input class="connexionInput" type="text" placeholder="Adresse e-mail"></input>
        <input class="connexionInput" type="text" placeholder="Mot de passe"></input>
        <button class="connexionButton">CONNEXION</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>