<?php
require_once "model/database.php";
require_once "functions.php";
require_once "layout/header.php";

$user =getCurrentUser();

?>

    <div class="background-principal">
        <main class="container d-flex flex-column pb-5">
            <div class="title-section container flex mb-5">
            <h2>Merci <?=  $user['prenom'] . " " . $user["nom"];  ?></h2>
            </div>

            <p class="my-5 align-self-center">Vous pourrez retrouver toutes les informations concernant votre réservation dans votre compte</p>
            <a href="<?=  SITE_URL;  ?>" class="btn-more align-self-center my-4"> Retour à l'accueil</a>
        </main>
<?php require_once("layout/footer.php") ?>