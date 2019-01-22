<?php
require_once '../../../model/database.php';

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

<h1>Gestion des Pays</h1>

<a href="create.php" class="btn btn-primary">
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
            <th>Nom</th>
            <th>Image</th>
            <th>Sous-titre</th>
            <th>Description</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lands as $land) : ?>
            <tr>
                <td><?php echo $land['nom']; ?></td>
                <td><img src="../../../uploads/<?php echo $land['image']; ?>" alt=""></td>
                <td><?php echo $land['sous_titre']; ?></td>
                <td><?php echo $land['description']; ?></td>
                <td class="actions">
                    <a href="update.php?id=<?php echo $land['id']; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $land['id']; ?>">
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