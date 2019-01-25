<?php
require_once "model/database.php";
require_once "functions.php";
$id = $_GET["id"];

$voyages = getAllSejoursByPays($id);
$pays = getOneEntity("pays", $id);
require_once "layout/header.php" ?>



<main class="container">
    <div class="title-section container flex">
    <h2>Liste des séjours : <?=  $pays['nom'];  ?></h2>
    </div>
    <section class="travel-top col-12 d-flex flex-wrap justify-content-center mx-auto my-5">
    <?php foreach ($voyages as $voyage) : ?>
            <?php include "include/sejour_inc.php" ?>
    <?php endforeach;  ?>
    </section>

</main>


<?php require_once "layout/footer.php" ?>
