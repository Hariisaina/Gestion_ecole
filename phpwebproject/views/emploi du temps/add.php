<?php
$titre = "Emploi du Temps";
require('../header.php');
require("../../controler/ctrlNote.php");

$success_add = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $info = $_POST;
    $ctrlNote = new ctrl_Note();

    $nom = isset($_POST['nom']) ? $_POST['nom'] : ""; 
    $classe = isset($_POST['classe']) ? $_POST['classe'] : ""; 
    $matiere = isset($_POST['matiere']) ? $_POST['matiere'] : ""; 
    $note = isset($_POST['note']) ? $_POST['note'] : ""; 
    
    $ctrlNote->add($nom, $classe, $matiere, $note);

    // Set the $success_add to true after successful addition
    $success_add = true;
}

require("../header.php");
?>

<style>
    /* ... Your existing CSS styles ... */
</style>

<section id="cta" class="cta">
    <!-- ... Your existing HTML content ... -->
    
    <?php if ($success_add) : ?>
        <!-- Success message -->
        <div align="center">
            <p>L'emploi du temps a été ajouté avec succès !</p>
        </div>
    <?php endif; ?>
    
    <!-- ... Your existing HTML content ... -->

    <div align="center">
        <form method="POST" id="addForm" enctype="multipart/form-data">
            <!-- ... Your existing form fields ... -->
            
            <button type="submit" class="cta-btn" name="add" style="color:black;">Ajouter</button>
        </form>
    </div>

    
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
