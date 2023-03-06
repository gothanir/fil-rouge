<?php

session_start();
require_once('../../model/db_connect.php');

if(isset($_GET['page'])) {
    $page = strval($_GET['page']);
    if ($page == 'cat' ) {
        require_once('../controllers/admin.php');
    } else {
        require_once('../controllers/connexion_admin.php');
    }
} else {
    require_once('../controllers/connexion_admin.php');
}


