    <?php
require_once '../../../model/database.php';
require_once '../../../functions.php';
$id = $_GET['id'];
$sejour = getOneSejour($id);
$liste_sejours = getAllEntities("sejour");
$liste_pays = getAllEntities("pays");
$liste_guide = getAllEntities("guide");
$difficultes = getAllEntities("difficulte");



require_once '../../layout/header.php';
?>

    <h1>Modification d'un séjour</h1>

    <form action="update_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label id="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?php echo $sejour["nom"]; ?>" class="form-control"
                   placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label>Pays</label>
            <select name="pays_id" class="form-control">
                <?php foreach ($liste_pays as $pays) : ?>
                    <?php $selected = ($pays["id"] == $sejour["pays_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $pays["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $pays["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Guide</label>
            <select name="guide_id" class="form-control">
                <?php foreach ($liste_guide as $guide) : ?>
                    <?php $selected = ($guide["id"] == $sejour["guide_id"]) ? "selected" : ""; ?>
                    <option value="<?php echo $guide["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $guide["nom"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label id="image">Image <img src="../../../uploads/<?php echo $sejour['image']; ?>" class="img-thumbnail"></label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label id="places">Places</label>
            <input type="text" id="places" name="places" value="<?php echo $sejour["places"]; ?>" class="form-control"
                   placeholder="Place" required>
        </div>

        <div class="form-group">
            <label id="description">Description</label>
            <textarea id="description" name="description"
                      class="form-control"><?php echo $sejour["description"]; ?></textarea>
        </div>
        <div class="form-group">
            <label for="difficulte">Indiquez le niveau de difficulté :</label>
            <select name="difficulte" class="form-control">
                <?php foreach ($difficultes as $difficulte) :; ?>
                    <?php $selected = ($difficulte["id"] == $sejour["difficulte"]) ? "selected" : ""; ?>
                    <option value="<?= $difficulte["id"]; ?>" <?php echo $selected; ?>>
                        <?= $difficulte["libelle"] ;?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label id="duree">Durée (en jours)</label>
            <input type="text" id="duree" name="duree" value="<?= $sejour["duree"]; ?>" class="form-control">
        </div>
        <div class="form-group form-check">
            <?php   ?>

            <input type="checkbox" name="publie" value="on" class="form-check-input" <?= ($sejour["publie"]==1)?'checked' : ''  ?>>
            <label>Publié ?</label>
        </div>
        <div class="form-group form-check">

            <input type="checkbox" name="a_la_une" value="on" class="form-check-input" <?=  ($sejour['a_la_une']==1) ? 'checked' : '' ;  ?>>
            <label>A la une ?</label>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>