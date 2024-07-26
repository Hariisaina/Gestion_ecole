<?php
require('../../controler/ctrlEmploiDuTemps.php');
$titre = "Suppression";
$id = $_GET['id'];
$ctrlEmploiDuTemps = new ctrl_emploi_du_temps;
$ctrlEmploiDuTemps->delete($id);

require('../header.php');
?>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Suppression réussie</h3>
        </div>
    </div>
    <br>

    <div align=center>
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/liste des emplois du temps.php">Revenir à la liste</a>
    </div>
</section>

<?php
require('../footer.php');
?>
