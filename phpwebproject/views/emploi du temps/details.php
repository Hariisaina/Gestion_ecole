<?php 
$titre = "Etudiant";
require '../header.php'; 
require '../../controler/ctrlEmploiDuTemps.php';
$id = $_GET['id']; 
$ctrl_emploi_du_temps = new ctrl_emploi_du_temps();
$e = $ctrl_emploi_du_temps->showDetails($id);
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
                <h3><?= $e[0]['jour'] . " - " . $e[0]['matiere']; ?></h3>
            <?php endif; ?>
        </div>
        <br>
        <br>
        <table class="table" border="1">
            <thead class="thead-light">
                <tr style="color: white;">
                    <th>id</th>
                    <th>Jour</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Matière</th>
                    <th>Professeur</th>
                    <th>Salle</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($e as $m) : ?>
                    <tr style="color: white;">
                        <td><?= $m['id']; ?></td>
                        <td><?= $m['jour']; ?></td>
                        <td><?= $m['heure_debut']; ?></td>
                        <td><?= $m['heure_fin']; ?></td>
                        <td><?= $m['matiere']; ?></td>
                        <td><?= $m['professeur']; ?></td>
                        <td><?= $m['salle']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <div class="text-center">
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/liste des emplois du temps.php">Revenir à la liste</a>
    </div>
</section><!-- End Cta Section -->

<?php
require("../footer.php");
?>
