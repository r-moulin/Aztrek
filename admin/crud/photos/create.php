<?php


require_once '../../layout/header.php';

$sejours = getAllEntities("sejour");
?>

    <h1>Ajout d'une image</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label id="name">Image</label>
            <input type="file" id="image" name="image" class="form-control">




            <label>Cette image concerne le séjour :</label>
            <select name="sejour_id" class="form-control">
                <?php foreach ($sejours as $sejour) : ?>
                    <option value="<?php echo $sejour["id"]; ?>">
                        <?php echo $sejour["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-4">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>