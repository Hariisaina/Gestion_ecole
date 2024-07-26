<?php



    function db_connect() {
        $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

        return $pdo;
    }
?>