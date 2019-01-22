<?php
require_once "model/database.php";
require_once "functions.php";


getHeader("AZTREK | Accueil", "") ?>

<main class="container ">
    <form action="create_account_query.php" method="post" lass="">

        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="text" class="form-control" name="mdp" placeholder="Mot de passe" required>
        </div>

        <div >
            <input type="submit" value="Créer mon compte" class="btn-more">
        </div>

    </form>

</main>


</html>

<?php require_once "layout/footer.php" ?>

