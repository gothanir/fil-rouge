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
            <a href=""  class="sm">Jeu<img class="flecheDown" src="assets/images/down.png"></a>
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
            <a href=""  class="sm">DLC<img class="flecheDown" src="assets/images/down.png"></a>
            <ul>
                <li><a href="">categorie 1</a></li>
                <li><a href="">categorie 2</a></li>
                <li><a href="">categorie 3</a></li>
                <li><a href="">categorie 4</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="pub">AMÉLIOREZ VOTRE COLLECTION DE JEUX AVEC NOS MEILLEURES VENTES JUSQU'À 75% DE RÉDUCTION !</div>
<img class="banniere" src="assets/images/banniere.jpg">

<p class="visite">Visitez les monde de Fil-rouge</p>

<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3"><img src="assets/images/AC.png"></div>
                    <div class="col-3"><img src="assets/images/Anno.jpg"></div>
                    <div class="col-3"><img src="assets/images/FarCry.png"></div>
                    <div class="col-3"><img src="assets/images/R6.png"></div>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3"><img src="assets/images/Rock.png"></div>
                    <div class="col-3"><img src="assets/images/theCrew.png"></div>
                    <div class="col-3"><img src="assets/images/trackmania.png"></div>
                    <div class="col-3"><img src="assets/images/watchdogs.png"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <a class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>     
    </a>
    <a class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
    
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>