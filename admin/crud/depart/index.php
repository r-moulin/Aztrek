<?php
require_once  '../../../functions.php';
require_once '../../../model/database.php';


$lands = getAllEntities("sejour");



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

    <h1>Gestion des Départs </h1>

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



    <?php foreach ($lands as $land) : ?>
        <h2>Départ pour <?=  $land["nom"];  ?></h2>

    <table class="table table-striped table-bordered table-condensed">
        <thead class="thead-light">
        <tr>
            <th>Date de départ</th>
            <th>Date d'arrivée</th>
            <th>Prix</th>
            <th class="actions">Actions</th>
        </tr>
        </thead>
        <tbody>
    <?php
    $id_land = $land["id"];
    $departs = getAllDepartBySejour($id_land);  ?>
        <?php foreach ($departs as $depart) : ?>
            <tr>

                <td><?php echo $depart{"date_depart"}; ?></td>
                <td><?php echo $depart{"date_arrivee_format"}; ?></td>
                <td><?php echo $depart{"prix"}; ?></td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $depart['id']; ?>" class="btn btn-warning mx-3">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $depart['id']; ?>">
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