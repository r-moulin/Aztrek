<?php

require_once '../../layout/header.php';
require_once '../../../model/database.php';

$id = $_GET["id"];

$sejours = getAllSejoursByPays($id);
$lands = getAllEntities("pays");


$error_msg = null;
if (isset($_GET['errcode'])) {
    $errcode = $_GET['errcode'];
    switch ($errcode) {
        case 23000:
            $error_msg = "Erreur lors de la suppression !";
            break;
        default:
            $error_msg = "Une erreur est survenue !";
            break;
    }
}

require_once '../../layout/header.php';
?>

    <h1>Liste des réservations par séjour</h1>

    <hr>

<?php if ($error_msg) : ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php echo $error_msg; ?>
    </div>
<?php endif; ?>

    <?php foreach ($lands as $land) : ?>
    <a href="resa.php?id=<?= $land["id"]  ?>.php" class="btn btn-primary mx-2">
        <i class="fa fa-plus"></i>
        <?=  $land["nom"];  ?>
    </a>
    <?php endforeach;  ?>




<?php foreach ($sejours as $sejour) : ?>
    <table class="table table-striped table-bordered table-condensed">
        <thead class="thead-light">
        <h2><?=  $sejour["nom"];  ?></h2>
        <tr>
            <th>Date de départ</th>
            <th>Utilisateur</th>
            <th>nombre de participant</th>


            <th class="actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $id_sejour = $sejour['id'];
        $reservations = getAllResaBySejour($id_sejour);
        ?>

        <?php foreach ($reservations as $reservation) : ?>

            <tr>

                <td><?php echo $reservation{"date_depart"}; ?></td>
                <td><?php echo $reservation{"user"}; ?></td>
                <td><?php echo $reservation{"nbr_personne"}; ?></td>
                <td class="actions">
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $reservation['id']; ?>">
                        <input type="hidden" name="id_sejour" value="<?php echo $_GET['id']; ?>">

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer

                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endforeach;  ?>

<?php require_once '../../layout/footer.php'; ?>