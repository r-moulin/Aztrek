<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

    <h1>Modification d'un Pays</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" value="<?php echo $pays["nom"]; ?>" class="form-control" placeholder="Nom"
                   required>
        </div>
        <div class="form-group">

            <label id="image">Image <img src="../../../uploads/<?php echo $pays['image']; ?>"class="img-thumbnail"></label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <div class="form-group">

            <label>Sous-titre</label>
            <input type="text" name="sous_titre" value="<?php echo $pays["sous_titre"]; ?>" class="form-control"
                   placeholder="Sous-titre" required>
        </div>
        <div class="form-group">

            <label>Description</label>
            <textarea type="text" name="description" class="form-control" placeholder="Description"
                      required><?php echo $pays["description"]; ?>
        </textarea>
        </div><div class="form-group">

            <label>Description courte</label>
            <textarea type="text" name="description_courte" class="form-control" placeholder="Description courte"
                      required><?php echo $pays["description_courte"]; ?>
        </textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>