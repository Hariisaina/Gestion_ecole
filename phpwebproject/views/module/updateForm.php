<?php
require_once("../../controler/ctrlModule.php");
// Envoyer un formulaire prédéfini :
$titre = "Modification";
$id = $_GET['id'];

$moduleCtrl = new ctrl_Module();
$dataForm = $moduleCtrl->setDataForm($id);

$code = $dataForm[0]['code'];
$nom = $dataForm[0]['nom'];
$heure = $dataForm[0]['heure'];

require("../header.php");
?>

<style>
    #myForm {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 20px;
        letter-spacing: 1px;
        display: block;
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

    .services {
        background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/blog-3.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }
</style>

<section id="services" class="services">
    <div class="container" align=center>

        <div class="section-title" style="color: white;">
            <br>
            <br>
            <h2>Modifier un module</h2>
            <br>
            <h3><?= $dataForm[0]['code'] . " : " . $dataForm[0]['nom']; ?></h3>
        </div>

        <div class="container">
            <form method="POST" action="successUpdate.php?id=<?= $id; ?>" id="myForm">

                <div class="form-group">
                    <label for="code">Code matière :</label>
                    <input name="code" type="text" class="form-control" id="code" value="<?= $code; ?>">
                </div>

                <div class="form-group">
                    <label for="nom">Nom du module:</label>
                    <input name="nom" type="text" class="form-control" id="nom" value="<?= $nom; ?>">
                </div>

                <div class="form-group">
                    <label for="heure">Nombre d'heures :</label>
                    <input name="heure" type="number" class="form-control" id="heure" value="<?= $heure; ?>">
                </div>
                <br>
                <br>

                <input type="submit" class="cta-btn" name="submit" style="color: white;" value="Modifier" />

            </form>
        </div>

    </div>
</section>

<?php
require("../footer.php");
?>
