<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un Pays</h1>

<form action="update_query.php" method="POST">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" value="<?php echo $pays["nom"]; ?>" class="form-control" placeholder="Nom" required>
        <label>Sous-titre</label>
        <input type="text" name="sous_titre" value="<?php echo $pays["sous_titre"]; ?>" class="form-control" placeholder="Sous-titre" required>
        <label>Description</label>
        <input type="text" name="description" value="<?php echo $pays["description"]; ?>" class="form-control" placeholder="Description" required>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>