<?php $title = "connexion"; ?>

<?php ob_start(); ?>

<div class="littleBody">
    <div class="flex">
        <p>Connexion au back office</p>
    </div>
    <form method="POST" class="connexionForm">
        <input class="connexionInput" type="mail" name="mail" placeholder="Adresse e-mail"></input>
        <input class="connexionInput" type="text" name="password" placeholder="Mot de passe"></input>
        <button class="connexionButton" type="submit" name="submit">CONNEXION</button>
    </form>
</div>
<?php 
    $content = ob_get_clean(); 
    require('layout.php');
?>