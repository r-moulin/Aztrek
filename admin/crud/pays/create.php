<?php require_once '../../layout/header.php'; ?>

    <h1>Ajout d'un Pays</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
        </div>
            <div class="form-group">
                <label id="image">Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
        <div class="form-group">
            <label>Sous-titre</label>
            <input type="text" id="soustitre" name="soustitre" class="form-control" placeholder="Sous-titre" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea id="description" name="description" class="form-control" placeholder="Description" required>
        </textarea>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>