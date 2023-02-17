<?php $title = "fil rouge"; ?>

<?php ob_start(); ?>
<header>
    <h1>Fil-rouge</h1>
    <p>Jeux</p>
    <p>Abonnement</p>
    <p>Launcher</p>
    <p>Support</p>
    <div class="end">
        <img class="logoConnection" src="assets/images/login.png">
        <p>Se connecter</p>
    </div>
</header>
<nav>
    <ul>
        <li>
            <a href=""  class="sm">Jeu</a>
            <ul>
                <li><a href="">categorie 1</a></li>
                <li><a href="">categorie 2</a></li>
                <li><a href="">categorie 3</a></li>
                <li><a href="">categorie 4</a></li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>
            <a href=""  class="sm">DLC</a>
            <ul>
                <li><a href="">categorie 1</a></li>
                <li><a href="">categorie 2</a></li>
                <li><a href="">categorie 3</a></li>
                <li><a href="">categorie 4</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>