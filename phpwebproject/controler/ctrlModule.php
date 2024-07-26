<?php
include('../../model/mdlModule.php');

class ctrl_Module
{
    public function index() 
    {
        $listeModule = Models::get_data();
        return $listeModule;
    }

    public function add($i)
    {
        $addModule = Models::add($i);
    }

    public function setDataForm($id)
    {
        // Afficher un formulaire prédéfini
        $id = '2'; // Remplacez '2' par la valeur appropriée pour l'ID

        $models = new Models();
        $info = $models->updateForm($id);
        
        return $info;
    }

    public function update($a, $i)
    {
        $save = Models::update($a, $i);
    }

    public function delete($id)
    {
        $delete = Models::delete($id);
    }
}
?>
