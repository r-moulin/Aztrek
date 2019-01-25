<?php
require_once '../../../model/database.php';

$sejours = getAllEntities("sejour");



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

<?php foreach ($sejours as $sejour) : ?>
    <a href="prog.php?id=<?= $sejour["id"]  ?>" class="btn btn-primary mx-2">
        <i class="fa fa-plus"></i>
        <?=  $sejour["nom"];  ?>
    </a>
<?php endforeach;  ?>

    </tbody>
    </table>


<?php require_once '../../layout/footer.php'; ?>