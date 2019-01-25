<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$programme = getOneEntity("programme", $id);


require_once '../../layout/header.php';
?>

    <h1>Modification d'un Pays</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Jour</label>
            <input type="text" name="jour" value="<?php echo $programme["jour"]; ?>" class="form-control" placeholder="Nom"
                   required>
        </div>
        <div class="form-group">

            <label>Étapes</label>
            <input type="text" name="etapes" value="<?php echo $programme["etapes"]; ?>" class="form-control"
                   placeholder="Etapes" required>
        </div>
        <div class="form-group">

            <label>Description</label>
            <textarea type="text" name="description" class="form-control" placeholder="Description"
                      required><?php echo $programme["description"]; ?>
        </textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="id_sejour" value="<?php echo $programme['sejour_id']; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>