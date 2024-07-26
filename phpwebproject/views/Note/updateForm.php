<?php
$titre = "Note";
require('../header.php');
require("../../controler/ctrlNote.php");

$success_update = false;
$error_message = '';

// Vérifier si un ID est passé dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    // Ici, vous pouvez récupérer les données existantes de l'emploi du temps en utilisant l'ID
    // par exemple : $emploi_temps = $ctrlNote->getEmploiTempsByID($id);
    // Puis, vous pouvez remplir le formulaire avec les données existantes.
} else {
    $error_message = "ID de l'emploi du temps non spécifié.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    // Ici, vous pouvez récupérer les données du formulaire de mise à jour et les enregistrer dans la base de données
    // par exemple : $ctrlNote->updateEmploiTemps($id, $new_nom, $new_classe, $new_matiere, $new_note);
    
    // Après la mise à jour réussie, vous pouvez définir la variable $success_update à true
    // et rediriger l'utilisateur vers la page de liste des emplois du temps.
    // par exemple : header('Location: liste_des_emplois_du_temps.php');
    // Assurez-vous de gérer les erreurs de mise à jour au besoin.
}

require("../header.php");
?>

<style>
    /* ... Vos styles CSS existants ... */
</style>

<section id="cta" class="cta">
    <!-- ... Votre contenu HTML existant ... -->

    <?php if ($error_message) : ?>
        <!-- Afficher un message d'erreur si l'ID n'est pas spécifié -->
        <div align="center">
            <p><?php echo $error_message; ?></p>
        </div>
    <?php else : ?>
        <!-- Afficher le formulaire de mise à jour si l'ID est spécifié -->
        <div align="center">
            <form method="POST" id="updateForm" enctype="multipart/form-data">
                <!-- ... Vos champs de formulaire existants ... -->
                
                <button type="submit" class="cta-btn" name="update" style="color:black;">Mettre à jour</button>
            </form>
        </div>
    <?php endif; ?>
    
</section><!-- Fin de la section Cta -->

<?php
require("../footer.php");
?>
