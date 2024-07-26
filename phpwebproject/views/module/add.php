
<?php
require("../../controler/ctrlModule.php");

$titre = "Ajouter";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $e = new ctrl_Module;
  $e->add($_POST); // Utiliser $_POST directement plutôt que de stocker les données dans une nouvelle variable $new
}

require("../header.php");
?>

<style>
    .services {
        background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/blog-3.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }

    #myForm {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 15px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 8px 30px 9px 30px;
        border-radius: 50px;
        transition: 0.5s;
        border: 2px solid #fff;
        color: #fff;
    }

    input[type=text],
    input[type=submit],
    input[type=email],
    input[type=number],
    input[type=date],
    input[type=file] {
        width: 50%;
        background: transparent;
        box-sizing: border-box;
        border: 2px solid #fff;
        transition: 0.5s;
        border-radius: 50px;
        color: #fff;
    }
    .cta-btn{
        border:1px solid black;
        padding:5px 5px;
    }
    .ctb{
        margin:50px;
    }
    .ctb a{
        padding:10px 80px;
        border-radius:30px;
        background: rgba(173, 159, 226, 0.85);
    }
</style>

<section id="services" class="services">
    <div class="container" align=center>
        <div class="section-title" style="color: white;">
            <br>
            <br>
            <h2>Modules</h2>
            <br>
            <h3>Ajouter un module</h3>
        </div>

        <form method="POST" id="myForm">
            <div class="form-group">
                <label for="code">Code matière :</label>
                <input name="code" type="text" class="form-control" id="code" placeholder="Ex : INFO_140">
            </div>

            <div class="form-group">
                <label for="nom">Nom du module:</label>
                <input name="nom" type="text" class="form-control" id="nom" placeholder="Ex : Introduction a la programmation">
            </div>

            <div class="form-group">
                <label for="heure">Nombre d'heure :</label>
                <input name="heure" type="number" class="form-control" id="heure">
            </div>
            <br>
            <br>
            <input type="submit" class="cta-btn" name='submit' style="color: white;" value="Ajouter">
        </form>

        <div class="ctb"align=center>
            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/module/listeModule.php">Revenir a la liste</a>
        </div>
    </div>
</section>

<?php require("../footer.php"); ?>
