<?php
$titre = "Note";
require('../header.php');
require("../../controler/ctrlNote.php");

$success_update = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $info = $_POST;
    $ctrlNote = new ctrl_Note();

    $nom = isset($_POST['nom']) ? $_POST['nom'] : ""; 
    $classe = isset($_POST['classe']) ? $_POST['classe'] : ""; 
    $matiere = isset($_POST['matiere']) ? $_POST['matiere'] : ""; 
    $note = isset($_POST['note']) ? $_POST['note'] : ""; 
    
    $ctrlNote->add($nom, $classe, $matiere, $note);

    // Set the $success_update to true after successful addition
    $success_update = true;
}

require("../header.php");
?>

<style>
    /* ... Your existing CSS styles ... */
</style>

<section id="cta" class="cta">
    <!-- ... Your existing HTML content ... -->
    
    <?php if ($success_update) : ?>
        <!-- Success message -->
        <div align="center">
            <p>Le nouvel emploi du temps a été ajouté avec succès !</p>
        </div>
    <?php endif; ?>
    
    <!-- ... Your existing HTML content ... -->

    <div align="center">
        <form method="POST" id="myForm" enctype="multipart/form-data">
            <!-- ... Your existing form fields ... -->
            
            <button type="submit" class="cta-btn" name="submit" style="color:black;">Ajouter</button>
        </form>
    </div>

    
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
