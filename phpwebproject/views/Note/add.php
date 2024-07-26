<?php
$titre = "Note";
require('../header.php');
require("../../controler/ctrlNote.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $info = $_POST;
    $ctrlNote = new ctrl_Note();

    $nom = isset($_POST['nom']) ? $_POST['nom'] : ""; 
    $classe = isset($_POST['classe']) ? $_POST['classe'] : ""; 
    $matiere = isset($_POST['matiere']) ? $_POST['matiere'] : ""; 
    $note = isset($_POST['note']) ? $_POST['note'] : ""; 
    
    
    $ctrlNote->add($nom, $classe, $matiere, $note);
}

require("../header.php");
?>

<style>
    #myForm {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 8px 30px 9px 30px;
        border-radius: 50px;
        transition: 0.5s;
        border: 2px solid #fff;
        color: #fff;
    }
    input[type=text],
    input[type=number] {
        width: 50%;
        background: transparent;
        box-sizing: border-box;
        border: 2px solid #fff;
        transition: 0.5s;
        border-radius: 50px;
        color: #fff;
    }
</style>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Ajouter un emploi du temps</h3>
            <h3>Insérez vos données</h3>
        </div>
    </div>
    <br>
    <br>

    <div align="center">
        <form method="POST" id="myForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">nom :</label>
                <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="classe">classe :</label>
                <input name="classe" type="text" class="form-control" id="classe">
            </div>
            <div class="form-group">
                <label for="matiere">Matière :</label>
                <input name="matiere" type="text" class="form-control" id="matiere" placeholder="Entrez la matière">
            </div>
            <div class="form-group">
                <label for="note">note :</label>
                <input name="note" type="number" class="form-control" id="nom" placeholder="note des eleve">
            </div>
            
            <button type="submit" class="cta-btn" name="submit" style="color:black;">Ajouter</button>
        </form>
    </div>

    
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
