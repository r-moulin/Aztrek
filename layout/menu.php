<?php
require_once  __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../functions.php";
$user = getCurrentUser();
$lands = getAllEntities("pays");


?>


<nav class="stellarnav">
    <ul id="nav">
        <li class="first"><a href="<?=  SITE_URL;  ?>">Accueil</a></li>
        <li class="dir"><a href=""> Nos destinations</a>
            <ul>
                <?php foreach ($lands as $land) : ?>
                    <li class="first"><a href="liste_sejours.php?id=<?= $land{"id"}  ?>" class="dir"><?= $land{"nom"}; ?></a>
                        <ul>
                            <?php $id_land = $land["id"];
                            $sejours = getAllSejoursByPays($id_land) ;?>
                            <?php foreach ($sejours as $sejour) : ?>
                            <li><a href="sejour.php?id=<?= $sejour["id"] ;?>"><?= $sejour["nom"];?></a></li>
                            <?php endforeach; ;?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="dir"><a href=""> Les Aztrekkeurs</a>
            <ul>
                <li class="first"><a href="#">L'équipe</a></li>
                <li class="last"><a href="#">l'agence</a></li>
            </ul>
        </li>
        <li class="dir"><a href="">Pratique</a>
            <ul>
                <li class="first"><a href="#">Formalités par pays</a>
                </li>
                <li class="last"><a href="#">Bien se préparer</a></li>
            </ul>
        </li>
        <li class="last"><a href="#">Connexion</a>
            <ul>
                <?php if (isset($user)) : ?>
                    <li class="last"><a href="<?= SITE_ADMIN; ?>"><?= $user['email'];  ?></a></li>
                    <li class="last"><a href="<?= SITE_ADMIN . "logout.php"; ?>">Se déconnecter</a></li>
                <?php else: ?>
                    <li class="last"><a href="<?= SITE_ADMIN; ?>">Se connecter</a></li>
                    <li class="last"><a href="<?= SITE_URL . "/create_account.php"; ?>">S'inscrire </a></li>
                <?php endif; ?>
            </ul>
        </li>

    </ul>
</nav>