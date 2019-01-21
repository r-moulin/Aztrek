<?php
require_once "model/database.php";
$id = $_GET["id"];

$sejours = getAllSejoursByPays($id);

require_once "layout/header.php" ?>



<main class="container">

    <section class="row recipes">
        <?php foreach ($sejours as $sejour) : ?>
            <div class="col-md-4">
                <?php include "include/sejour_inc.php" ?>
            </div>
        <?php endforeach; ?>
    </section>


</main>


<?php require_once "layout/footer.php" ?>
