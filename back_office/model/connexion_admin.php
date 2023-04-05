<?php

if (isset($_POST["submit"])) {
    if ( isset($_POST["password"]) && isset($_POST["mail"]) && !empty($_POST["password"]) && !empty($_POST["mail"]) )  {
        $email = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);

        $sqlQuery = 'SELECT * FROM admin WHERE email = :email' ;
        $adminStatement = $db->prepare($sqlQuery);
        $adminStatement -> bindValue(":email",$email,PDO::PARAM_STR);
        $adminStatement->execute();
        $admin = $adminStatement->fetch();

        $password = htmlspecialchars($_POST["password"]);
        if ($admin) {
            if(password_verify($password, $admin['password'])) {
                $_SESSION['email'] = $email;
                header('Location: index.php');
                echo 'bienvenue';
            } else {
                $msg= '<div class="error">erreur : email et/ou mot de passe incorecte.</div>';
            } 
        } else {
                $msg= '<div class="error">erreur : email et/ou mot de passe incorecte.</div>';
            }
    } else {
        $msg= '<div class="error">erreur : veuiller remplir tout les champs.</div>';
    }
}