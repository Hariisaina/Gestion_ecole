<?php 
$titre = "Etudiant";
require '../header.php'; 
require '../../controler/ctrlEtudiant.php';
$id = $_GET['id']; 
$ctrletudiants = new ctrl_etudiants();
$e = $ctrletudiants->showDetails($id);
?>

<style>
    #pdp 
    {
        width: 150px;
        border-radius: 3px; 
    }
</style>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Détails</h3>
            <br>
            <?php if (!empty($e)) : ?>
                <h3><?= $e[0]['nom'] . " " . $e[0]['prenom']; ?></h3>
            <?php endif; ?>
        </div>
        <br>
        <br>
        <table class="table" border="1">
            <thead class="thead-light">
                <tr style="color: white;">
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Téléphone</th>
                    <th>E-mail</th>
                    <th>Facebook</th>
                    <th>Diplôme</th>
                    <th>Genre</th>
                    <th>Photo de profil</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($e as $m) : ?>
                    <tr style="color: white;">
                        <td><?= $m['id']; ?></td>
                        <td><?= $m['nom']; ?></td>
                        <td><?= $m['prenom']; ?></td>
                        <td><?= $m['birthdate']; ?></td>
                        <td><?= $m['telephone']; ?></td>
                        <td><?= $m['email']; ?></td>
                        <td><?= $m['fb']; ?></td>
                        <td><?= $m['diplome']; ?></td>
                        <td><?= $m['genre']; ?></td>
                        <td><img src="<?= $m['pdp']; ?>" alt="Photo" id="pdp"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="text-center">
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/listeEtudiant.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
