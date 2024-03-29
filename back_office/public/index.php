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

        // gestion produit
        } elseif ($page == 'product' ) {
            require_once('../controllers/productSelect.php');
        } elseif ($page == "productAdd") {
            require_once('../controllers/productAdd.php');
        } elseif ($page == "modifProduct") {
            require_once('../controllers/productModif.php');

        // gestion plateforme
        } elseif ($page == 'plateforme' ) {
            require_once('../controllers/plateformeSelect.php');
        } elseif ($page == "addPlateforme") {
            require_once('../controllers/plateformeAdd.php');
        } elseif ($page == "modifPlateforme") {
            require_once('../controllers/plateformeModif.php');


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