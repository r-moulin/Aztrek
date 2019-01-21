<?php

require_once '../../../model/database.php';

$sejours = getAllSejours();


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

    <h1>Gestion des Départs pour <?=  $sejours{"nom"};  ?></h1>

    <a href="create.php" class="btn btn-primary mx-2">
        <i class="fa fa-plus"></i>
        Ajouter
    </a>
    <a href="option/index.php" class="btn btn-primary mx-2">
        <i class="fa fa-plus"></i>
        Difficulté
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
            <th>Pays</th>
            <th>Nom</th>
            <th>Image</th>
            <th>Descriptions</th>
            <th>Guide</th>
            <th>Places</th>
            <th>Durée</th>
            <th>Difficulté</th>
            <th>Publication</th>
            <th>A la une</th>

            <th class="actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($sejours as $sejour) : ?>

            <tr>

                <td><?php echo $sejour{"pays"}; ?></td>
                <td><?php echo $sejour{"nom"}; ?></td>
                <td><img src="../../../uploads/<?php echo $sejour['image']; ?>" class="img-thumbnail"></td>
                <td><?php echo $sejour{"description"}; ?></td>
                <td><?php echo $sejour{"guide"}; ?></td>
                <td><?php echo $sejour{"places"}; ?></td>
                <td><?php echo $sejour{"duree"}; ?> jours</td>
                <td><?php echo $sejour{"difficulte"}; ?> </td>
                <td><?php echo $sejour{"publie"}; ?> </td>
                <td><?php echo $sejour{"a_la_une"}; ?> </td>

                <td class="actions">
                    <a href="depart.php?id=<?php echo $sejour['id']; ?>" class="btn btn-warning ">
                        <i class="fa fa-edit"></i>
                        Gérer les départs
                    </a> <a href="update.php?id=<?php echo $sejour['id']; ?>" class="btn btn-warning mx-3">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $sejour['id']; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>

                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


<?php require_once '../../layout/footer.php'; ?>