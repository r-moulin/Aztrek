<?php
require_once '../../../../model/database.php';

$difficultes = getAllEntities("difficulte");


require_once '../../../layout/header.php';
?>

<h1>Ajout d'une difficulté</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Difficulté</label>
        <input type="text" name="libelle" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../../layout/footer.php'; ?>

