<?php
// index.php

if(isset($_GET['page'])) {
    $page = strval($_GET['page']);
    if ($page == 'connexion' ) {
        require_once('controllers/connexion.php');
    } else {
        require_once('controllers/homepage.php');
    }
} else {
    require_once('controllers/homepage.php');
}
