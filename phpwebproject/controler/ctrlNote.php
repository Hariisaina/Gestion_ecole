<?php
include('../../model/mdlNote.php');

class ctrl_Note {
    public function add($e) {
        $addNote = Models::add($e);
    }
}
?>
