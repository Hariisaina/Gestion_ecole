<?php
require('../../controler/ctrlProf.php');

$id = $_GET['id'];
$ctrlProfs = new ctrl_profs;
$e = $ctrlProfs->delete($id);

require("../header.php");
?>

<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
            <h3>Suppression réussie</h3>
        </div>
    </div>
    <br>
    <div align=center>
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/prof/listeProf.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php require("../footer.php"); ?>
