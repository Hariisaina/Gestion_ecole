<?php
require("../../controler/ctrlEtudiant.php");
$titre = "Modification";
$id = $_GET['id'];

$ctrlEtudiant = new ctrl_etudiants();
$models = new Models();
$detail = $models->updateForm($id);

$nom = '';
$prenom = '';
$date = '';
$phone = '';
$email = '';
$fb = '';
$pdp = '';
$diplome = '';
$genre = '';

if ($detail !== null && count($detail) > 0) {
    $nom = $detail[0]['nom'] ?? '';
    $prenom = $detail[0]['prenom'] ?? '';
    $date = $detail[0]['birthdate'] ?? '';
    $phone = $detail[0]['telephone'] ?? '';
    $email = $detail[0]['email'] ?? '';
    $fb = $detail[0]['fb'] ?? '';
    $pdp = $detail[0]['pdp'] ?? '';
    $diplome = $detail[0]['diplome'] ?? '';
    $genre = $detail[0]['genre'] ?? '';
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
            <?php if (isset($nom) && isset($prenom)) : ?>
                <h3><?= $nom . " " . $prenom; ?></h3>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>
    <div align="center">
        <form action="successUpdate.php?id=<?= $id; ?>" method="POST" id="myForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input name="nom" type="text" class="form-control" id="nom" aria-describedby="emailHelp"
                    value="<?= $nom; ?>">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input name="prenom" type="text" class="form-control" id="prenom" value="<?= $prenom; ?>">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input name="birth" type="date" class="form-control" id="date" value="<?= $date; ?>">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" type="number" class="form-control" id="phone" value="<?= $phone; ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="<?= htmlspecialchars($email); ?>">
            </div>

            <div class="form-group">
                <label for="fb">Pseudo fb</label>
                <input name="fb" type="text" class="form-control" id="fb" value="<?= $fb; ?>">
            </div>

            <div class="form-group">
                <label for="pdp">Photo de profil</label>
                <input name="pdp" type="file" class="form-control" id="pdp">
            </div>

            <div class="form-group">
                <label for="diplome">Diplôme</label>
                <input name="diplome" type="text" class="form-control" id="diplome" value="<?= $diplome; ?>">
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <input name="genre" type="radio" id="male" value="male"<?= ($genre === 'male') ? ' checked' : ''; ?>><label for="male">Homme</label>
                <input name="genre" type="radio" id="female" value="female"<?= ($genre === 'female') ? ' checked' : ''; ?>><label for="female">Femme</label>
            </div>

            <button type="submit" class="cta-btn" name='submit' style="color:black;">Enregistrer les modifications</button>

        </form>
    </div>
</section><!-- End Cta Section -->

<?php
require "../footer.php";
?>
