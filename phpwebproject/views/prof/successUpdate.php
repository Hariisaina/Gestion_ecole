<?php
require ('../../controler/ctrlProf.php');
$id = $_GET['id'];
$new_info = $_POST;

$ctrl_profs = new ctrl_profs();
$e = $ctrl_profs->update($new_info, $id);

require("../header.php");
?>
<style>
    .cta {
        background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
</style>

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
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/prof/listeProf.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
