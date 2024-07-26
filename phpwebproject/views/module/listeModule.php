<?php

require_once('../../controler/ctrlModule.php');
require_once('../header.php');

$titre = "Modules";

// Appeler la méthode "index()" du contrôleur ctrl_Module
$moduleCtrl = new ctrl_Module();
$modules = $moduleCtrl->index();

?>

<style>
    .services {
        background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/blog-24.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
    
    
</style>

<section id="services" class="services">
    <div class="container">
        <div class="section-title" style="color: white;">
            <br>
            <br>
            <h2>Modules</h2>
            <br>
            <br>
            <h3>Les différents modules</h3>
            <p><strong>Explorez ici les différents matières enseignées à DevCrews</strong></p>
        </div>

        <div class="row">
            <?php foreach ($modules as $module) : ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box">
                        <h5 class="title"><strong><?php echo $module['code']; ?></strong></h5>
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><strong><?php echo $module['nom']; ?></strong></h4>
                        <h5 class="title"><strong><?php echo $module['heure']; ?> Heures</strong></h5>
                        <br>
                        <a href="/e-learning-website-main/project/phpwebproject/views/module/updateForm.php?id=<?= $module['id']; ?>" class="btn btn-secondary">Modifier</a>
                        <br><br>
                        <a href="/e-learning-website-main/project/phpwebproject/views/module/delete.php?id=<?= $module['id']; ?>" class="btn btn-secondary">Supprimer</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div align=center>
        <a href="/e-learning-website-main/project/phpwebproject/views/module/add.php" class="btn btn-secondary">Ajouter</a>
    </div>
</section><!-- End Services Section -->

<?php
require("../footer.php");
?>

