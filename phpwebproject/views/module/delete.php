<?php
require ('../../controler/ctrlModule.php');
$titre = "Suppression";
$id = $_GET['id'];
$moduleCtrl = new ctrl_Module();
$moduleCtrl->delete($id);

require("../header.php");
?>

<style>
    .services 
    {
        background:linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/blog-3.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
</style>

<section id="services" class="services">
    <div class="container">
        <div class="section-title">
            <br>
            <br>
            <h2>Modules</h2>
            <br>
            <br>
            <h3 style="color: white;">Suppression effectuée</h3>
        </div>
        <div align="center">
            <a href="/e-learning-website-main/project/phpwebproject/views/module/listeModule.php" class="btn btn-secondary">Revenir à la liste</a>
        </div>
    </div>
</section>

<?php
require("../footer.php");
?>
