
<?php
$titre = "Prof";
require('../header.php');
require("../../controler/ctrlEtudiant.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $info = $_POST;
    $ctrlEtudiants = new ctrl_etudiants();

    $m = isset($_POST['m']) ? $_POST['m'] : ""; // Remplacez 'm' par le nom du champ correspondant dans le formulaire
    
    $ctrlEtudiants->add($info, $m);
}

require("../header.php");
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
            <h3>Ajouter</h3>
            <h3>Insérer vos données</h3>
        </div>
    </div>
    <br>
    <br>

    <div align="center">
        <form method="POST" id="myForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input name="nom" type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input name="birth" type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input name="phone" type="number" class="form-control" id="phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="fb">Pseudo fb</label>
                <input name="fb" type="text" class="form-control" id="fb">
            </div>
            <div class="form-group">
                <label for="pdp">Photo de profil</label>
                <input name="pdp" type="file" class="form-control" id="pdp">
            </div>
            <div class="form-group">
                <label for="diplome">Diplôme</label>
                <input name="diplome" type="text" class="form-control" id="diplome">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <div>
                    <input name="genre" type="radio" id="male" value="male">
                    <label for="male">Homme</label>
                </div>
                <div>
                    <input name="genre" type="radio" id="female" value="female">
                    <label for="female">Femme</label>
                </div>
            </div>
            <button type="submit" class="cta-btn" name="submit" style="color:black;">Ajouter</button>
        </form>
    </div>

    <div align="center">
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/listeEtudiant.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
