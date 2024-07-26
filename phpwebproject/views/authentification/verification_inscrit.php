<?php
session_start();
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password'])) {
    // Connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'esti';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');

    // Utilisation des fonctions mysqli_real_escape_string et htmlspecialchars pour prévenir les attaques SQL et XSS
    $nom = mysqli_real_escape_string($db, htmlspecialchars($_POST['nom']));
    $prenom = mysqli_real_escape_string($db, htmlspecialchars($_POST['prenom']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    if ($nom !== "" && $prenom !== "" && $password !== "") {
        // Exécuter la requête SQL pour insérer les données dans la base de données
        $sql = "INSERT INTO users (username, password) VALUES ('$nom $prenom', '$password')";

        $result = mysqli_query($db, $sql);

        if ($result) {
            echo "Les données ont été ajoutées avec succès à la base de données.";
        } else {
            echo "Une erreur s'est produite lors de l'ajout des données à la base de données.";
        }

        // Fermer la connexion à la base de données
        mysqli_close($db);
    }
} else {
    header('Location: form_connect.php');
    exit();
}
?>
