<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'esti';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');
    
    // Utilisation des fonctions mysqli_real_escape_string et htmlspecialchars pour prévenir les attaques SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    if (  $username !=="" && $password !== "") {
        $requete = "SELECT count(*) FROM users WHERE username = '".$username."' AND password = '".$password."'";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse[0];

        if ($count != 0) {
            // Nom d'utilisateur et mot de passe corrects
            $_SESSION['username'] = $username;
            header('Location: ../accueil/accueil.php');
            exit();
        } else {
            header('Location: form_connect.php?erreur=1');
            exit();
        }
    } else {
        header('Location: form_connect.php?erreur=2');
        exit();
    }
} else {
    header('Location: form_connect.php');
    exit();
}

mysqli_close($db); // Fermer la connexion
?>
