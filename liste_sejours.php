<?php
require_once "model/database.php";
$id = $_GET["id"];

$voyages = getAllSejoursByPays($id);


require_once "layout/header.php" ?>



<main class="container">
    <?php foreach ($voyages as $voyage) : ?>
        <div class="col-md-4">
            <?php include "include/sejour_inc.php" ?>
        </div>
    <?php endforeach;  ?>


</main>


<?php require_once "layout/footer.php" ?>
