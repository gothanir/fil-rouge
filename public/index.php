<?php
// index.php
require_once('../model/db_connect.php');

if(isset($_GET['page'])) {
    $page = strval($_GET['page']);
    if ($page == 'connexion' ) {
        require_once('../controllers/connexion.php');
    } else if ($page == 'try_connect.php') {
        require_once('../controllers/try_connect.php');
    } else {
        require_once('../controllers/homepage.php');
    }
} else {
    require_once('../controllers/homepage.php');
}