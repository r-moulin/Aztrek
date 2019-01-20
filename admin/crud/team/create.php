<?php require_once '../../layout/header.php'; ?>

<h1>Ajout d'un membre de l'équipe</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label id="nom">Nom</label>
        <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
        <div class="form-group">
            <label id="name">Image</label>
            <input type="file" id="image" name="image" class="form-control" >
        </div>
        <label id="biographie">Biographie</label>
        <textarea id="biographie" name="biographie" class="form-control" placeholder="Biographie" required>
        </textarea>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>