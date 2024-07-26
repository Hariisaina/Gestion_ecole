<?php
$titre = "Notes";
require('../../controler/ctrlNote.php');
$ctrlNote = new ctrl_Note();
$notes = $ctrlNote->getAllNotes();

require('../header.php');
?>

<section id="cta" class="cta">
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <h3>Liste des Notes</h3>
            <p>Voici la liste des notes, vous pouvez voir les notes et certaines informations les concernant.</p>
        </div>

        <br>
        <br>

        <table class="table" border="1">
            <thead class="thead-light">
                <tr style="color: white;">
                    <th>Nom</th>
                    <th>Classe</th>
                    <th>Matière</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notes as $note) : ?>
                    <tr style="color: white;">
                        <td><?php echo $note['nom']; ?></td>
                        <td><?php echo $note['classe']; ?></td>
                        <td><?php echo $note['matiere']; ?></td>
                        <td><?php echo $note['note']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?php require('../footer.php'); ?>
