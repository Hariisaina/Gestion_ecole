<?php
require('../../controler/ctrlEmploiDuTemps.php');
$titre = "Modification";
$id = $_GET['id'];
$new_info = $_POST;
$pdp = $_FILES;

$destination = "../../assets/images/";

$a = move_uploaded_file( $destination );

$ctrlEmploiDuTemps = new ctrl_emploi_du_temps();
$ctrlEmploiDuTemps->update($id, $new_info['jour'], $new_info['heure_debut'], $new_info['heure_fin'], $new_info['matiere'], $new_info['professeur'], $destination );

require "../header.php";
?>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Modification réussie</h3>
        </div>
    </div>
    <br>

    <div align=center>
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/liste des emplois du temps.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php
require "../footer.php";
?>
