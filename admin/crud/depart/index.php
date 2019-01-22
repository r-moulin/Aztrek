<?php

require_once '../../../model/database.php';

$id = $_GET["id"];
$departs = getAllDepartBySejour($id);
$sejour = getOneSejour($id, false);
//print_r($departs);die;



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

    <h1>Gestion des Départs pour <?=  $sejour["nom"];  ?>  </h1>

    <a href="create.php" class="btn btn-primary mx-2">
        <i class="fa fa-plus"></i>
        Ajouter
    </a>


    <hr>

<?php if ($error_msg) : ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php echo $error_msg; ?>
    </div>
<?php endif; ?>

    <table class="table table-striped table-bordered table-condensed">
        <thead class="thead-light">
        <tr>
            <th>Date de départ</th>
            <th>Date d'arrivée</th>
            <th>Prix</th>
            <th>Nom</th>


            <th class="actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($departs as $depart) : ?>

            <tr>

                <td><?php echo $depart{"date_depart"}; ?></td>
                <td><?php echo $depart{"date_arrivee_format"}; ?></td>
                <td><?php echo $depart{"nom"}; ?></td>
                <td><?php echo $depart{"prix"}; ?></td>
                <td class="actions">
                    <a href="../sejour/update.php?id=<?php echo $sejour['id']; ?>" class="btn btn-warning mx-3">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="../sejour/delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sejour['id']; ?>">
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


<?php require_once '../../layout/footer.php'; ?>