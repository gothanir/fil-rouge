<?php
// index.php
require_once('controllers/homepage.php');
require_once('controllers/post.php');
try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];
                post($identifier);
            } else {
                throw new Exception ('Erreur : aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] === 0) {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];
            } else {
                throw new Exception ('Erreur : aucun identifiant de billet envoyé');
            }
        } else {
            throw new Exception ("Erreur 404 : la page que vous recherchez n'existe pas.");
        }
    } else {
        homepage();
    }
} catch (Exception $e) {
   $errorMessage = $e->getMessage();
   require('templates/error.php');
}