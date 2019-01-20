<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$guide = getOneEntity("guide", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un membre de l'équipe</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" value="<?php echo $guide["nom"]; ?>" class="form-control" placeholder="Nom" required>
        <label>Biographie</label>
        <input type="text" name="biographie" value="<?php echo $guide["biographie"]; ?>" class="form-control" placeholder="Biographie" required>
        <label>Image</label>
        <input type="file" name="image" value="<?php echo $guide["image"]; ?>" class="form-control"  required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>