<?php
require('../../controler/ctrlEtudiant.php');
$titre = "Suppression";
$id = $_GET['id'];
$e = new ctrl_etudiants;
$e->delete($id);

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
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/listeEtudiant.php">Revenir à la liste</a>
    </div>
</section>

<?php
require('../footer.php');
?>
