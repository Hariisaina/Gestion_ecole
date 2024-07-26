<?php
class Models {
    public static function add($e) {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
        
        $nom = $e['nom'] ?? '';
        $classe = $e['class'] ?? '';
        $matiere = $e['matiere'] ?? '';
        $note = $e['note'] ?? '';

        $requete = "INSERT INTO note (nom, classe, matiere, note) VALUES ('$nom', '$classe', '$matiere', '$note')";
        $add = $pdo->query($requete);
    }
}
?>
