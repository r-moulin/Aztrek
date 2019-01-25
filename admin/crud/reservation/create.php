<?php require_once '../../layout/header.php';
$sejours = getAllSejours()
?>

<h1>Ajout d'un départ</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Date départ</label>
        <input type="date" name="depart" class="form-control" required>
    </div>    <div class="form-group">
        <label>Prix</label>
        <input type="number" name="prix" class="form-control" required>
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

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>


