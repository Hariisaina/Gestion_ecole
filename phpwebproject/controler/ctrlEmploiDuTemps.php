<?php

include('../../utils/db.php');
include('../../model/mdlEmploiDuTemps.php');

class ctrl_emploi_du_temps {

    public function index() 
    {
        $emploiDuTemps = Models::get_data();
        return $emploiDuTemps;
    }

    public function add($jour, $heureDebut, $heureFin, $matiere, $professeur, $salle)
    {
        Models::add($jour, $heureDebut, $heureFin, $matiere, $professeur, $salle);
    }

    public function setDataForm($id)
    {
        $info = Models::updateForm($id);
        return $info;
    }

    public function update($id, $jour, $heureDebut, $heureFin, $matiere, $professeur, $salle)
    {
        Models::update($id, $jour, $heureDebut, $heureFin, $matiere, $professeur, $salle);
    }

    public function delete($id)
    {
        Models::delete($id);
    }

    public function showDetails($id)
    {
        $detail = Models::updateForm($id);
        return $detail; 
    }
}

?>
