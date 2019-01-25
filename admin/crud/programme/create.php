<?php require_once '../../layout/header.php';

$id = $_GET['id'];?>

    <h1>Ajout d'une journée de trek</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Jour</label>
            <input type="number" id="jour" name="jour" class="form-control" placeholder="Jour" required>
        </div>
        <div class="form-group">
            <label>Étapes</label>
            <input type="text" id="etapes" name="etapes" class="form-control" placeholder="Étapes" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea id="description" name="description" class="form-control" placeholder="Description" required>
        </textarea>
        </div>

        <input type="hidden" value="<?=$id?>" name="sejour_id">

        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>