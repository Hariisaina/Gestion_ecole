<?php
require('../../controler/ctrlEtudiant.php');
$titre = "Modification";
$id = $_GET['id'];
$new_info = $_POST;
$pdp = $_FILES;

$tname = $_FILES['pdp']['tmp_name'];
$name = $_FILES["pdp"]["name"];
$destination = "../../assets/images/";

$a = move_uploaded_file($tname, $destination . $name);

$e = new ctrl_etudiants();
$e->update($new_info, $id, $destination . $name);

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
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/listeEtudiant.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php
require "../footer.php";
?>
