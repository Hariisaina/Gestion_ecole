<?php

include('../../utils/db.php');
include('../../model/mdlEtudiant.php');

class ctrl_etudiants {

    public function index() 
    {
        $listeEtudiant = Models::get_data();
        return $listeEtudiant;
    }

    public function add($i, $m)
    {
        $addEtudiant = Models::add($i, $m);
        return $addEtudiant;
    }

    public function setDataForm($id)
    {
        $info = Models::updateForm($id);
        return $info;
    }

    public function update($a, $i, $e)
    {
        $save = Models::update($a, $i, $e);
        return $save;
    }

    public function delete($id)
    {
        $delete = Models::delete($id);
        return $delete;
    }

    public function showDetails($id)
    {
        $detail = Models::updateForm($id);
        return $detail; 
    }
}

?>
