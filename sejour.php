<?php
require_once "model/database.php";
require_once "functions.php";
$id = $_GET["id"];
$user = getCurrentUser();
$sejour = getOneSejour($id, false);
$departs = getAllDepartBySejour($id);
$id_sejour = $sejour["id"];
$programmes = getAllProgBySejour("$id_sejour");


getHeader("AZTREK | Accueil", "") ?>

<main class="container">
    <section class="flex-row col_center">
        <div class="title-section container flex">
            <h2 class="title_section mb-5"><?= $sejour{'nom'}; ?></h2>
        </div>
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
<section class="conteu-sejour container">

    <?php foreach ($programmes as $programme) : ?>

        <h4 class="mt-5">Jour <?= $programme['jour']; ?></h4>
        <h5><?= $programme['etapes']; ?></h5>
        <div class="desc-sejour border-bottom "><?= $programme['description']; ?></div>

    <?php endforeach; ?>
</section>


<section class="container">
    <table class="table table-striped">
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
                <td scope="row"><?= $depart['date_depart']; ?></td>
                <td><?= $depart['date_arrivee_format']; ?></td>
                <td><?= $depart['prix']; ?> €</td>
                <td>
                    <?php if ($depart['places'] > 4) {

                        echo $depart['places'];
                    } elseif ($depart['places'] > 0 & $depart['places'] <= 4) {

                        echo "il n'en reste plus que " . $depart['places'];
                    } else {
                        echo "<span class='text-danger'> COMPLET</span>";
                    } ?>
                </td>

                <?php if (isset($user)) : ?>
                    <td><a href="reservation.php?id=<?= $depart['id']; ?>" class="btn btn-info">
                            <i class="fa fa-check"></i>
                            réserver
                        </a>
                    </td>
                <?php else: ?>
                    <td><a class="btn btn-primary" href="<?= SITE_ADMIN; ?>"><i class="fa fa-sign-in"></i>Se
                            connecter</a>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</section>


</html>

<?php require_once "layout/footer.php" ?>
