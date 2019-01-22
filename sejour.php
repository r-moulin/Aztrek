<?php
require_once "model/database.php";
require_once "functions.php";
$id = $_GET["id"];

$sejour = getOneSejour($id, false);
$departs = getAllEntities("depart");


getHeader("AZTREK | Accueil", "") ?>

<main>
    <section class="row col_center">
        <H2 class="title_section"><?= $sejour{'nom'}; ?></H2>
        <article class="presentation-travel col-10 col_center flex">
            <img class=" image-sejour" src="uploads/<?= $sejour['image']; ?>" alt="">
            <div class="info-travel row ">
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
        <?= $sejour{"description"}; ?>
    </section>

    <table class="table ">
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
        <?php foreach ($sejour as $item) : ?>
            <td></td>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>

</main>


</html>

<?php require_once "layout/footer.php" ?>
