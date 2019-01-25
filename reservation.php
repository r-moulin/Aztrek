<?php
require_once "model/database.php";
require_once "functions.php";
$id = $_GET["id"];
$depart = getOneDepart($id);
$user = getCurrentUser();



getHeader("AZTREK | Accueil", "") ?>

<main class="container">
    <section class="flex-row col_center">
        <div class="title-section container flex">
            <h2 class="title_section mb-5"><?= $depart{'sejour'}; ?></h2>
        </div>
    </section>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Date de départ</th>
            <th>Date de retour</th>
            <th>Prix par participant</th>
            <th>Nombre de Place</th>
            <th>Réserver</th>
        </tr>
        </thead>
        <tbody>
        <form action="<?= SITE_URL; ?>/create_resa_query.php?id=<?=  $id;  ?>" method="post">
            <tr>
                <td><?= $depart["date_depart"]; ?></td>
                <td><?= $depart["date_arrivee_format"]; ?></td>
                <td><?= $depart["prix"]; ?></td>
                <td>
                    <select name="nbr_participants" id="nbr_participants" class="form-control">
                        <?php for ($nbr_participant =1 ; $nbr_participant <= $depart['places']; $nbr_participant++) : ?>
                            <option value="<?= $nbr_participant; ?>">
                                <?= $nbr_participant;?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </td>
                <td>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Réserver
                    </button></td>

            </tr>
        </form>
        </tbody>
    </table>
</main>
<section class="container">
    <form action="<?= SITE_URL; ?> /crud/reservation/index">


    </form>

</section>


</html>

<?php require_once "layout/footer.php" ?>
