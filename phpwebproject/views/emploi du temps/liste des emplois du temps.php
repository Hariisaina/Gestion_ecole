<?php
$titre = "Étudiants";
require('../../controler/ctrlEmploiDuTemps.php');
$emploi_du_temps = new ctrl_emploi_du_temps();
$emplois = $emploi_du_temps->index();

function setMajuscule($text) {
    return strtoupper($text);
}

require('../header.php');
?>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Liste des Emplois du Temps</h3>
            <p>Voici la liste des emplois du temps, vous pouvez y voir les emplois du temps et certaines informations les concernant.</p>
        </div>

        <br>
        <br>

        <table class="table" border="1">
            <thead class="thead-light">
                <tr style="color: white;">
                    <th>Details</th>
                    <th>Matière</th>
                    <th>Heure</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emplois as $k => $emploi) : ?>
                    <tr style="color: white;">
                        <td>
                            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/details.php?id=<?= $emploi['id']; ?>"><?php echo $k + 1; ?></a>
                        </td>
                        <td style="color: white;"><?php echo setMajuscule($emploi['matiere']); ?></td>
                        <td><?php echo $emploi['heure_debut'] . ' - ' . $emploi['heure_fin']; ?></td>
                        <td>
                            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/updateForm.php?id=<?= $emploi['id']; ?>">Modifier</a>
                        </td>
                        <td>
                            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/delete.php?id=<?= $emploi['id']; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div align="center">
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/emploi du temps/add.php">Ajouter</a>
    </div>
</section>

<?php require('../footer.php'); ?>
