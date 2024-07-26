<?php

class Models {

    static function get_data() 
    {
        $pdo = db_connect();
        $q = 'SELECT * FROM etudiant ORDER BY nom ASC';
        $listeEtudiant = $pdo->query($q)->fetchAll();
        return $listeEtudiant;
    } 

    static function add($e, $m)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

        $nom = $_POST['nom'] ?? ''; 
        $prenom = $_POST['prenom'] ?? ''; 
        $birth = $_POST['birth'] ?? ''; 
        $phone = $_POST['phone'] ?? ''; 
        $email = $_POST['email'] ?? ''; 
        $fb = $_POST['fb'] ?? ''; 
        $diplome = $_POST['diplome'] ?? ''; 
        $genre = $_POST['genre'] ?? ''; 
        
        $a = "INSERT INTO etudiant (nom, prenom, birthdate, telephone, email, fb, pdp, diplome, genre) VALUES ('$nom' ,'$prenom' ,'$birth' ,'$phone' ,'$email' ,'$fb' ,'$m' ,'$diplome' ,'$genre')";
        
        $add = $pdo->query($a);
        
    }

    static function delete($Id)
    {

        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
        
        $id = $Id;

        $a = "DELETE FROM etudiant WHERE id = $id";
        
        $delete = $pdo->query($a);
    }

    static function updateForm($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
        
        $a = "SELECT * FROM etudiant WHERE id = $id";
        $info = $pdo->query($a)->fetchAll();
        
        return $info;
    }

    
    static function update($a, $i, $e) 
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

        $nom = $_POST['nom'] ?? ''; 
        $prenom = $_POST['prenom'] ?? ''; 
        $birth = $_POST['birth'] ?? ''; 
        $phone = $_POST['phone'] ?? ''; 
        $email = $_POST['email'] ?? ''; 
        $fb = $_POST['fb'] ?? '';  
        $diplome = $_POST['diplome'] ?? ''; 
        $genre = $_POST['genre'] ?? '';

        $sql = "UPDATE etudiant SET nom = '$nom', prenom = '$prenom', birthdate = '$birth', telephone = '$phone', email = '$email', fb = '$fb', pdp = '$e', diplome = '$diplome', genre = '$genre' WHERE id = $i"; 

        $update = $pdo->query($sql);
    }
}

?>
