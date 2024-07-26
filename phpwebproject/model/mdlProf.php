<?php

include('../../utils/db.php');

class mdl_profs {
    public static function get_data() {
        $pdo = db_connect();

        $q = 'SELECT * FROM prof';
        $liste_prof = $pdo->query($q)->fetchAll();

        return $liste_prof;
    }

    static function insert($e) {
        $pdo = db_connect();
        if (isset($_POST['nom'])
        && (isset($_POST['prenom'])
        && (isset($_POST['telephone'])
        && (isset($_POST['email']))))) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
                
            $q = "INSERT INTO prof(nom, prenom, email, telephone)
            VALUES('$nom','$prenom','$email', $telephone)";

            $prof = $pdo -> query($q);

        }
    }

    function update($q, $id) {
        $pdo = db_connect();
        if (isset($_POST['nom'])
        && (isset($_POST['prenom'])
        && (isset($_POST['email'])
        && (isset($_POST['telephone']))))) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email= $_POST['email'];
            $telephone = $_POST['telephone'];
            $id = $_GET['id'];
                
            $q = "UPDATE prof
            SET nom = '$nom', prenom = '$prenom', email = '$email', telephone = $telephone
            WHERE id = $id";

            $prof = $pdo -> query($q);
            return $prof;
        }  
    }

    function delete() {
        $pdo = db_connect();

        $id = $_GET['id'];

        $q = "DELETE FROM prof WHERE id = $id";
        $delete = $pdo->query($q);

    }

    function get_by_id($id) {
        $pdo = db_connect();     

        $q = "SELECT * FROM prof WHERE id =$id";
        $liste_prof = $pdo->query($q)->fetchAll();

        return $liste_prof;
    }
}
?>