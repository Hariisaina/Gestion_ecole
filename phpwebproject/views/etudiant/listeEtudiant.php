<?php
$titre = "Étudiants";
require('../../controler/ctrlEtudiant.php');
$e = new ctrl_etudiants();
$etudiants = $e->index();

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
            <h3>Liste des Étudiants</h3>
            <p>Voici la liste des étudiants, vous pouvez y voir dessus les étudiants et certaines informations les concernant.</p>
        </div>

        <br>
        <br>

        <table class="table" border="1">
            <thead class="thead-light">
                <tr style="color: white;">
                    <th>NUMÉRO</th>
                    <th>NOM</th>
                    <th>PRÉNOM</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $k => $etudiant) : ?>
                    <tr style="color: white;">
                        <td>
                            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/details.php?id=<?= $etudiant['id']; ?>"><?php echo $k + 1; ?></a>
                        </td>
                        <td style="color: white;"><?php echo setMajuscule($etudiant['nom']); ?></td>
                        <td><?php echo setMajuscule($etudiant['prenom']); ?></td>
                        <td>
                            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/updateForm.php?id=<?= $etudiant['id']; ?>">Modifier</a>
                        </td>
                        <td>
                            <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/delete.php?id=<?= $etudiant['id']; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div align="center">
        <a class="cta-btn" href="/e-learning-website-main/project/phpwebproject/views/etudiant/add.php">Ajouter</a>
    </div>
</section>

<?php require('../footer.php'); ?>
