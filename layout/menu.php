<?php
$lands = getAllSejours();
?>


<nav class="stellarnav">
    <ul id="nav">
        <li class="first"><a href="#">Accueil</a></li>
        <li class="dir"><a href=""> Nos destinations</a>
            <ul>
                <?php foreach ($lands as $land) : ?>
                    <li class="first"><a href="liste_sejours.php?id=<?= $land{"pays_id"}  ?>" class="dir"><?= $land{"pays"}; ?></a>
                        <ul>
                            <li class="first"><a href="<?= $sejour   ?>"><?= $land{"nom"} ?></a></li>
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
                <li class="first"><a href="#">S'inscrire</a></li>
                <li class="last"><a href="<?= SITE_ADMIN; ?>">Se connecter</a>

                </li>
            </ul>
        </li>

    </ul>
</nav>