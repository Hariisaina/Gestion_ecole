<?php

class Models {

    static function get_data() 
    {
        $pdo = db_connect();
        $requete = 'SELECT * FROM emploi_du_temps ORDER BY jour ASC, heure_debut ASC';
        $emploiDuTemps = $pdo->query($requete)->fetchAll();
        return $emploiDuTemps;
    } 

    static function add($e, $m)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

        $jour = $_POST['jour'] ?? ''; 
        $heureDebut = $_POST['heure_debut'] ?? ''; 
        $heureFin = $_POST['heure_fin'] ?? ''; 
        $matiere = $_POST['matiere'] ?? ''; 
        $professeur = $_POST['professeur'] ?? ''; 
        $salle = $_POST['salle'] ?? ''; 
        
        $sql = "INSERT INTO emploi_du_temps (jour, heure_debut, heure_fin, matiere, professeur, salle) VALUES ('$jour', '$heureDebut', '$heureFin', '$matiere', '$professeur', '$salle')";
        
        $add = $pdo->query($sql);
    }

    static function delete($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
        
        $sql = "DELETE FROM emploi_du_temps WHERE id = $id";
        
        $delete = $pdo->query($sql);
    }

    static function updateForm($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
        
        $sql = "SELECT * FROM emploi_du_temps WHERE id = $id";
        $info = $pdo->query($sql)->fetchAll();
        
        return $info;
    }

    
    static function update($id, $e) 
    {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

        $jour = $_POST['jour'] ?? ''; 
        $heureDebut = $_POST['heure_debut'] ?? ''; 
        $heureFin = $_POST['heure_fin'] ?? ''; 
        $matiere = $_POST['matiere'] ?? ''; 
        $professeur = $_POST['professeur'] ?? ''; 
        $salle = $_POST['salle'] ?? ''; 

        $sql = "UPDATE emploi_du_temps SET jour = '$jour', heure_debut = '$heureDebut', heure_fin = '$heureFin', matiere = '$matiere', professeur = '$professeur', salle = '$salle' WHERE id = $id"; 

        $update = $pdo->query($sql);
    }
}

?>
