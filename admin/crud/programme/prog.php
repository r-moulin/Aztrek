<?php

require_once '../../layout/header.php';
require_once '../../../model/database.php';

$id = $_GET["id"];

$sejours = getAllEntities("sejour");
$programmes = getAllProgBySejour($id);


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

    <h1>Liste du programme</h1>

    <hr>

<?php if ($error_msg) : ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php echo $error_msg; ?>
    </div>
<?php endif; ?>

    <?php foreach ($sejours as $sejour) : ?>
    <a href="prog.php?id=<?= $sejour["id"]  ?>" class="btn btn-primary mx-2">
        <i class="fa fa-plus"></i>
        <?=  $sejour["nom"];  ?>
    </a>
    <?php endforeach;  ?>
    <br>

    <form action=""></form>

    <a href="create.php?id=<?=$id;  ?>" class="btn btn-primary mx-2 my-2" value="<?php echo $id?>">
        <i class="fa fa-plus"></i>
        Ajouter une journée
    </a>




    <table class="table table-striped table-bordered table-condensed">
        <thead class="thead-light">
        <tr>
            <th>Jour</th>
            <th>Etapes</th>
            <th>description</th>
            <th class="actions">Actions</th>
        </tr>
        </thead>
<?php foreach ($programmes as $programme) : ;?>
        <tbody>
            <tr>
                <td>Jour <?php echo $programme{"jour"}; ?></td>
                <td><?php echo $programme{"etapes"}; ?></td>
                <td><?php echo $programme{"description"}; ?></td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $programme['id']; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $programme['id']; ?>">

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer

                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
<?php endforeach;  ?>
    </table>

<?php require_once '../../layout/footer.php'; ?>