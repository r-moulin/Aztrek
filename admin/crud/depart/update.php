<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$depart = getOneEntity("depart", $id);
$sejours = getAllSejours();
require_once '../../layout/header.php';
?>

    <h1>Modification d'un départ</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Date départ</label>
            <input type="date" name="depart" value="<?php echo $depart["depart"]; ?>" class="form-control" placeholder="Nom"
                   required>
        </div>
        <div class="form-group">

            <label>Prix</label>
            <input type="text" name="prix" value="<?php echo $depart["prix"]; ?>" class="form-control"
                   placeholder="prix" required>
        </div>
        <div class="form-group">
            <label>Séjour</label>
            <select name="sejour_id" class="form-control">
                <?php foreach ($sejours as $sejour) : ?>
                    <option value="<?php echo $sejour["id"]; ?>">
                        <?php echo $sejour["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>