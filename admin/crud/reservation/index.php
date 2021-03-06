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

        </tbody>
    </table>


<?php require_once '../../layout/footer.php'; ?>