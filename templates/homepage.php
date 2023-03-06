<?php $title = "fil rouge"; ?>

<?php ob_start(); ?>
<header>
    <h1>Fil-rouge</h1>
    <p>Jeux</p>
    <p>Abonnement</p>
    <p>Launcher</p>
    <p>Support</p>
    <div class="end" href="index.php?page=connexion">
        <img href="index.php?page=connexion" class="logoConnection" src="../assets/images/login.png">
        <a class="connect" href="index.php?page=connexion">Connexion</a>
    </div>
</header>
<nav>
    <ul>
        <li>
            <a class="sm">Jeux<img class="flecheDown" src="../assets/images/down.png"></a>
            <ul>
                <li><a class="fontHover" href="">categorie 1</a></li>
                <li><a class="fontHover" href="">categorie 2</a></li>
                <li><a class="fontHover" href="">categorie 3</a></li>
                <li><a class="fontHover" href="">categorie 4</a></li>
            </ul>
        </li>
    </ul>
    <ul>
        <li>
            <a class="sm">DLC<img class="flecheDown" src="../assets/images/down.png"></a>
            <ul>
                <li><a class="fontHover" href="">categorie 1</a></li>
                <li><a class="fontHover" href="">categorie 2</a></li>
                <li><a class="fontHover" href="">categorie 3</a></li>
                <li><a class="fontHover" href="">categorie 4</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="pub">AMÉLIOREZ VOTRE COLLECTION DE JEUX AVEC NOS MEILLEURES VENTES JUSQU'À 75% DE RÉDUCTION !</div>
<img class="banniere" src="../assets/images/banniere.jpg">

<p class="visite">Visitez les monde de Fil-rouge</p>
    
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>