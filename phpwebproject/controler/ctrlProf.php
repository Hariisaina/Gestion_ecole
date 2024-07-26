<?php
require('../../model/mdlProf.php');

class ctrl_profs {
    // Cette fonction a pour but de retourner la liste des étudiants
    public static function index() {
        $profs = mdl_profs::get_data();
        return $profs;
    } 

    public static function add($e){
        $profs = mdl_profs::insert($e);
    }

    public static function setDataform($id) {
        // afficher un formulaire pré-rempli
        $mdlProfs = new mdl_profs();
        $profs = $mdlProfs->get_by_id($id);
        return $profs;
    }

    public static function save($id) {
        $mdlProfs = new mdl_profs();
        $save = $mdlProfs->get_by_id($id);
        return $save;
    }

    public static function update($q, $id) {
        $profs = new mdl_profs();
        $profs->update($q, $id);
        
    }

    public static function delete() {
        $mdlProfs = new mdl_profs();
        $delete = $mdlProfs->delete();
        
    }

    public static function showDetails($id) {
        $mdlProfs = new mdl_profs();
        $profs = $mdlProfs->get_by_id($id);
        return $profs;
    }
}
?>