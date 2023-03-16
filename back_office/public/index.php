<?php
session_start();
require_once('../../model/db_connect.php');

if(isset($_SESSION['email'])) {
    if(isset($_GET['page'])) {
        $page = strval($_GET['page']);
        if ($page == 'cat' ) {
            require_once('../controllers/categorieSelect.php');
        } elseif ($page == 'signout' ) {
            session_destroy();
            require_once('../controllers/connexion_admin.php');            
        } elseif ($page == "addCat") {
            require_once('../controllers/categorieAdd.php');
        } elseif ($page == "modifCat") {
            require_once('../controllers/categorieModif.php');
        } else {
            require_once('../controllers/homepageBO.php');
        }
    } else {
        require_once('../controllers/homepageBO.php');
    }
} else {
    require_once('../controllers/connexion_admin.php');
}