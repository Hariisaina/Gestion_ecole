<?php
require("../../controler/ctrlEmploiDuTemps.php");
$titre = "Modification";
$id = $_GET['id'];

$ctrlEmploiDuTemps = new ctrl_emploi_du_temps();
$detail = $ctrlEmploiDuTemps->setDataForm($id);

$jour = '';
$heureDebut = '';
$heureFin = '';
$matiere = '';
$professeur = '';
$salle = '';

if ($detail !== null && count($detail) > 0) {
    $jour = $detail[0]['jour'] ?? '';
    $heureDebut = $detail[0]['heure_debut'] ?? '';
    $heureFin = $detail[0]['heure_fin'] ?? '';
    $matiere = $detail[0]['matiere'] ?? '';
    $professeur = $detail[0]['professeur'] ?? '';
    $salle = $detail[0]['salle'] ?? '';
}

require "../header.php";
?>

<style>
    #myForm {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-size: 13px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 8px 30px 9px 30px;
        border-radius: 50px;
        transition: 0.5s;
        border: 2px solid #fff;
        color: #fff;
    }

    input[type=text],
    input[type=time],
    input[type=password],
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
</style>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Modifier</h3>
            <br>
            <?php if (isset($jour) && isset($matiere)) : ?>
                <h3><?= $jour . " - " . $matiere; ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>
    <div align="center">
        <form action="successUpdate.php?id=<?= $id; ?>" method="POST" id="myForm">
            <div class="form-group">
                <label for="jour">Jour :</label>
                <input name="jour" type="date" class="form-control" id="jour" aria-describedby="emailHelp" value="<?= $jour; ?>">
            </div>

            <div class="form-group">
                <label for="heure_debut">Heure de début :</label>
                <input name="heure_debut" type="time" class="form-control" id="heure_debut" value="<?= $heureDebut; ?>">
            </div>

            <div class="form-group">
                <label for="heure_fin">Heure de fin :</label>
                <input name="heure_fin" type="time" class="form-control" id="heure_fin" value="<?= $heureFin; ?>">
            </div>

            <div class="form-group">
                <label for="matiere">Matière :</label>
                <input name="matiere" type="text" class="form-control" id="matiere" value="<?= $matiere; ?>">
            </div>

            <div class="form-group">
                <label for="professeur">Professeur :</label>
                <input name="professeur" type="text" class="form-control" id="professeur" value="<?= $professeur; ?>">
            </div>

            <div class="form-group">
                <label for="salle">Salle :</label>
                <input name="salle" type="text" class="form-control" id="salle" value="<?= $salle; ?>">
            </div>

            <button type="submit" class="cta-btn" name='submit' style="color:black;">Enregistrer les modifications</button>

        </form>
    </div>
</section><!-- End Cta Section -->

<?php
require "../footer.php";
?>
