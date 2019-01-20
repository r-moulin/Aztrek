<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'un Pays</h1>

<form action="create_query.php" method="POST">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
        <label>Sous-titre</label>
        <input type="text" id="soustitre" name="soustitre" class="form-control" placeholder="Sous-titre" required>
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