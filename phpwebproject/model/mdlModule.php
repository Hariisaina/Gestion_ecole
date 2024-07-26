<?php

    class Models {

        static function  get_data() 
        {   
            $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
            $q = 'SELECT * FROM module';
            $listeModule = $pdo->query($q)->fetchAll();
            return $listeModule;
        }


        static function add($e)
        {
            $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

            $code =  $_POST['code']; 
            $nom =  $_POST['nom']; 
            $heure =  $_POST['heure']; 

            $a = "INSERT INTO `module`(`code`, `nom`, `heure`) VALUES ('$code' ,'$nom' ,
            '$heure')";
            
            $add = $pdo->query($a);
            
        }

        static function delete($Id)
        {

            $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
            
            $id = $Id;

            $a = "DELETE from module where id = $id ";
            
            $delete = $pdo->query($a);
        }

        function updateForm($id)
        {
            $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');
            
            $a = "SELECT * from module where id = $id";
            $info = $pdo->query($a)->fetchAll();
            

            return $info;
        }

        
       static function update($a, $i) 
        {
            $pdo = new PDO('mysql:host=localhost;dbname=esti', 'root', '');

            $code =  $_POST['code']; 
            $nom =  $_POST['nom']; 
            $heure =  $_POST['heure']; 

            
            $a = "UPDATE module SET code = '$code', nom = '$nom', heure = '$heure'  WHERE id = $i"; 

            $update = $pdo->query($a);

        }

    }


?>