<?php
$titre = "Prof";
include('../header.php');
require('../../controler/ctrlProf.php');
$info = $_POST;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $ctrlProfs = new ctrl_profs();
    $e = $ctrlProfs->add($info);
}
?>
<style>
    .cta {
        background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.8)), url("../../assets/img/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 60px 0;
    }

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
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
            <h3>Ajouter un professeur</h3>
            <p>Vous pouvez ajouter un nouvel professeur en remplissant ce formulaire.</p>
        </div>
    </div>

    <div class="container">
        <fieldset>
            <h1 style="text-align: center; color: white;">Ajouter</h1>
            <div style="text-align: center;">
                <form method="POST" id="myForm">
                    <div>
                        <label for="nom">Nom</label><br>
                        <input type="text" name="nom" id="nom" size="50"><br><br>
                    </div>
                    <div>
                        <label for="prenom">Prénom</label><br>
                        <input type="text" name="prenom" id="prenom" size="50"><br><br>
                    </div>
                    <div>
                        <label for="naissance">Date de naissance</label><br>
                        <input type="date" name="naissance" id="naissance" size="50"><br><br>
                    </div>
                    <div>
                        <label for="telephone">Téléphone</label><br>
                        <input type="text" name="telephone" id="telephone" size="50"><br><br>
                    </div>
                    <div>
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" size="50"><br><br>
                    </div>
                    <div>
                        <label>Genre</label><br>
                        <input type="radio" id="male" name="genre" value="male">
                        <label for="male">Homme</label>
                        <input type="radio" id="female" name="genre" value="female">
                        <label for="female">Femme</label><br><br>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit" name="submit">Ajouter</button>
                    </div>
                </form>
            </div>
        </fieldset>
        <div align=center>
            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/prof/listeProf.php">Revenir à la liste</a>
        </div>
    </div>
</section>
<?php require '../footer.php'; ?>
