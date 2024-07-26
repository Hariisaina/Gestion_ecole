<?php
    include('../../model/mdlAut.php');

    class ctrlAut {

        public function add($i)
        {
            $addAut = Models::add($i);
        }

    }

?>