<?php
require_once '../../../model/database.php';

$lands = getAllEntities("pays");
$guides = getAllEntities("guide");

require_once '../../layout/header.php';
?>

<h1>Ajout d'une photo</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Pays</label>
        <select name="pays_id" class="form-control">
            <?php foreach ($lands as $land) : ?>
                <option value="<?php echo $land["id"]; ?>">
                    <?php echo $land["nom"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Guide</label>
        <select name="guide_id" class="form-control">
            <?php foreach ($guides as $guide) : ?>
                <option value="<?php echo $guide["id"]; ?>">
                    <?php echo $guide["nom"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Nombre de Place</label>
        <input type="number" name="places" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Durée</label>
        <input type="number" name="duree" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Difficulté</label><br>
        <input type="radio" name="difficulte" class="form-check-input" value="1" required>Facile <br>
        <input type="radio" name="difficulte" class="form-check-input" value="2" required>Moyen <br>
        <input type="radio" name="difficulte" class="form-check-input" value="3" required>Difficile <br>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" name="publie" class="form-check-input">
        <label>Publié ?</label>
        <div class="form-group form-check">
        <input type="checkbox" name="a_la_une" class="form-check-input">
        <label>A la une ?</label>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

