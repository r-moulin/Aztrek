<?php
require_once "model/database.php";
require_once "functions.php";
$id = $_GET["id"];

$sejour = getOneSejour($id, false);
$departs = getAllDepartBySejour($id);




getHeader("AZTREK | Accueil", "") ?>

<main class="container">
    <section class="flex-row col_center">
        <h2 class="title_section mb-5"><?= $sejour{'nom'}; ?></h2>
        <article class="presentation-travel col-10 col_center flex">
            <img class=" image-sejour col-5" src="uploads/<?= $sejour['image']; ?>" alt="">
            <div class="info-travel row col-5 align-items-center">
                <ul>
                    <li><?= $sejour{'duree'}; ?> jours</li>
                    <li>à partir de <?= $sejour{'prix'}; ?> €</li>
                    <li class="d-flex flex-row">
                        <?php for ($level = 1; $level <= 5; $level++) {
                            if ($level <= $sejour["difficulte"]) {
                                echo '<img class="img-lvl mx-2" src="img/elements/cactus-full.svg" alt=\"\">';
                            } else {
                                echo '<img class="img-lvl mx-2" src="img/elements/cactus.svg" alt="">';
                            }
                        } ?>
                    </li>
                    <li>
                        <div class="btn-contact flex">
                            <a href="contact.html" class="btn-more">Contactez-nous</a>
                        </div>
                    </li>
                </ul>
            </div>


        </article>
        <div class="description text-center my-5">
            <?= $sejour['description']; ?>
        </div>

    </section>
</main>
<section class="container"><table class="table table-striped">
        <thead>
        <tr>
            <th>Date de départ</th>
            <th>Date d'arrivée</th>
            <th>Prix</th>
            <th>Place dispo</th>
            <th>Réserver</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($departs as $depart) : ?>
        <tr>
            <th scope="row"><?= $depart['date_depart'];  ?></th>
            <th><?= $depart['date_arrivee_format'];  ?></th>
            <th><?= $depart['prix'];  ?></th>
            <th><?= $depart['places'];  ?></th>
            <th><button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i>
                    réserver
                </button></th>

        </tr>
        <?php endforeach;  ?>
        </tbody>
    </table>

</section>





</html>

<?php require_once "layout/footer.php" ?>
