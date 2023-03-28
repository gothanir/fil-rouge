<?php
session_start();
require_once('../../model/db_connect.php');

if(isset($_SESSION['email'])) {
    if(isset($_GET['page'])) {
        $page = strval($_GET['page']);

        // gestion categorie
        if ($page == 'cat' ) {
            require_once('../controllers/categorieSelect.php');
        } elseif ($page == "addCat") {
            require_once('../controllers/categorieAdd.php');
        } elseif ($page == "modifCat") {
            require_once('../controllers/categorieModif.php');

        // gestion sous-categorie
        } elseif ($page == 'subCat' ) {
                require_once('../controllers/subCategorieSelect.php');
        } elseif ($page == "subAddCat") {
            require_once('../controllers/subCategorieAdd.php');
        } elseif ($page == "modifSubCat") {
            require_once('../controllers/subCategorieModif.php');

        // gestion images
        } elseif ($page == 'picture' ) {
            require_once('../controllers/pictureSelect.php');
        } elseif ($page == "pictureAdd") {
            require_once('../controllers/pictureAdd.php');
        } elseif ($page == "modifPicture") {
            require_once('../controllers/pictureModif.php');

        // deconexion
        } elseif ($page == 'signout' ) {
            session_destroy();
            require_once('../controllers/connexion_admin.php');  
            
        // page d'acceuill
        } else {
            require_once('../controllers/homepageBO.php');
        }
    } else {
        require_once('../controllers/homepageBO.php');
    }

// page de conexion
} else {
    require_once('../controllers/connexion_admin.php');
}