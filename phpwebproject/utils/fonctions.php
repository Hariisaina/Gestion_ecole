<?php

    function print_d($data) {
        displayData($data);
        die();
    }

    function setMajuscule($text) {
        return strtoupper($text);
    }

    function getById ($id){
        if(isset($_GET['id']))
        {
            $id = ($_GET['id']);
        }
        return $id;
    }
?>