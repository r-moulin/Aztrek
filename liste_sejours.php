<?php
require_once "model/database.php";
$id = $_GET["id"];

$voyages = getAllSejoursByPays($id);


require_once "layout/header.php" ?>



<main class="container">
    <section class="travel-top">
    <?php foreach ($voyages as $voyage) : ?>
            <?php include "include/sejour_inc.php" ?>
    <?php endforeach;  ?>
    </section>

</main>


<?php require_once "layout/footer.php" ?>
