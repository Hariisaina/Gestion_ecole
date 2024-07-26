<?php
require ('../../controler/ctrlModule.php');

$titre = "Modification"; 
$id = $_GET['id'];
$new_info = $_POST;

$e = new ctrl_Module;
$ctrl_module = new ctrl_Module(); // Création d'une instance de la classe ctrl_Module
$e = $ctrl_module->update($new_info, $id); // Appel de la méthode update avec les arguments $new_info et $id


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
          <h3 style = "color : white; ">Modifications enregistrées</span></h3>
        </div>

    <div align=center>
    <a href="/e-learning-website-main/project/phpwebproject/views/module/listeModule.php" class="btn btn-secondary">Revenir a la liste</a>
    </div>

    </section><!-- End Services Section -->

<?php
require("../footer.php");
?>