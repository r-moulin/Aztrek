<?php
require_once "model/database.php";
$id = $_GET["id"];

$sejour = getOneSejour($id, false);


require_once "layout/header.php" ?>

<main>
    <section class="row col_center">
        <H2 class="title_section"><?= $sejour{'nom'}; ?></H2>
        <article class="presentation-travel col-10 col_center flex">
            <img class="col-3" src="uploads/<?= $sejour{'image'}; ?>" alt="">
            <div class="info-travel row col-9">
                <ul>
                    <li><?= $sejour{'duree'}; ?> jours</li>
                    <li>à partir de <?= $sejour{'prix'}; ?></li>
                    <li>Difficulté : <?= $sejour{"difficulte"}; ?></li>
                    <li>
                        <div class="btn-contact flex">
                            <a href="contact.html">Contactez-nous</a>
                        </div>
                    </li>
                </ul>

                <img src="img/caminando/map-caminando.jpg" alt="">
            </div>


        </article>
        <?= $sejour{"description"}; ?>
    </section>
    <section class="bg-daybyday">
        <div class="daybyday row col_center flex">

            <article class="itineraire col-8">

                <h2>itinéraire</h2>
                <div class="col-6">

                    <div class="day-1">
                        <h4>Jour 1</h4>
                        <h5>Vol pour Mexico</h5>
                        <p class="icon-plane">Vol pour Mexico</p>
                    </div>
                    <div class="day-2">
                        <h4>Jour 2</h4>
                        <h5>Mexico - Puebla - La Venta (3300m)</h5>
                        <p>Le matin, nous prenons la route pour Puebla, deuxième ville du pays et important pôle
                            économique et universitaire. La visite du centre-ville, caractérisé par ses maisons
                            coloniales couvertes de "talaveras" (céramiques typiques de la région), est notamment
                            ponctuée par la visite de la chapelle du Rosaire, qui constitue un exemple remarquable
                            de l’expression de l’architecture baroque au Mexique, et de la bibliothèque
                            Palafoxiana. Fondée en 1646, ce monument historique rassemble plus de 43000 volumes en
                            hébreu, latin, sanscrit ou grec. Transfert au refuge de La Venta (3300m) pour le dîner.</p>
                        <ul class="info-technic">
                            <li class="icon-refuge">Hébergement : en refuge</li>
                            <li class="icon-car">Transfert : Véhicule privatisé, entre 4h et 4h30</li>
                        </ul>
                    </div>
                    <div class="day-3">
                        <h4>Jour 3</h4>
                        <h5>Ascension du volcan La Malinche (4461m) - Mexico</h5>
                        <p>Départ nocturne pour l’ascension du volcan La Malinche. Le terrain, relativement facile
                            compte tenu de l’altitude, et la souplesse de l’organisation, rendent ce légendaire
                            sommet accessible au plus grand nombre. Il reste néanmoins une véritable ascension, et
                            nécessite donc une bonne préparation physique. D’abord sur une alternance de chemins
                            assez larges et de sentiers qui sillonnent une forêt de conifères, l’ascension devient
                            plus escarpée à l’approche des 4000m mais ne présente pas de grosse difficulté
                            technique. Le sommet, atteint en fin de matinée, offre, du haut de ses 4461m, un
                            fantastique panorama sur la ceinture de feu mexicaine. Nous descendons vers le refuge
                            Malinche (3100m) où nous déjeunons avant de prendre la route pour Mexico. Temps libre
                            et dîner à l’hôtel.</p>
                        <ul class="info-technic">
                            <li class="icon-warning">Attention : cette journée est d'un niveau 3 chaussures, pour
                                le chemin pentu et l'altitude.
                            </li>
                            <li class="icon-hiker">Heures de marche : entre 8h et 8h30</li>
                            <li class="icon-denivele">Dénivelé + : 1300 m</li>
                            <li class="icon-denivele">Dénivelé - : 1300 m</li>
                            <li class="icon-hotel">Hébergement : en hôtel</li>
                            <li class="icon-car">Transfert : Véhicule privatisé, entre 3h30 et 4h</li>
                        </ul>
                    </div>
                    <div class="day-4">
                        <h4>Jour 4</h4>
                        <h5>Palenque - communauté de Babilonia</h5>
                        <p>Entre montagne et forêt tropicale humide, le Chiapas est une superbe région qui dénote
                            franchement avec les cactus auxquels on associe souvent le Mexique. Une randonnée
                            inédite de deux jours autour et dans le site de Palenque, en compagnie d'un guide de la
                            forêt, nous permet de découvrir d’une manière originale le premier joyau du Chiapas.
                            C'est aussi l'occasion de rencontrer la communauté de Babilonia, voisine du site. La
                            première journée de randonnée débute à l'entrée du parc national de Palenque ; nous
                            pique-niquerons au bord du río Chacamax (baignade possible).
                            Dîner et nuit sous tente dans la communauté.</p>
                        <ul class="info-technic">
                            <li class="icon-warning">Note : pour cette randonnée itinérante, nous emportons nos
                                affaires pour la nuit et le jour suivant. Nous retrouverons nos sacs le lendemain
                                après la visite de Palenque.
                            </li>
                            <li class="icon-hiker">Heures de marche : entre 6h et 6h30</li>
                            <li class="icon-tente">Hébergement : sous tente</li>

                        </ul>
                    </div>
                    <div class="day-5">
                        <h4>Jour 5</h4>
                        <h5>Playa del Carmen - Cancún - vol retour</h5>
                        <p class="icon-plane">Temps libre (baignade possible) selon l'horaire du vol retour. Transfert à
                            l’aéroport de
                            Cancún (45mn) et vol de retour. Repas libres.</p>
                    </div>
                </div>
                <div class="btn-contact"><a href="contact.html">Contactez-nous</a></div>

            </article>

            <aside class="like-intravel col-4 row">
                <h3>VOUS APPRÉCIEREZ</h3>
                <ul class="flex">
                    <li>
                        <img src="img/caminando/aside-01.jpg" alt="illustration mexique">
                        <p>Un voyage mêlant randonnée et visites
                            culturelles</p>
                    </li>
                    <li>
                        <img src="img/caminando/aside-02.jpg" alt="illustration mexique">
                        <p>L’ascension du volcan La Malinche,
                            à 4461m</p>
                    </li>
                    <li>
                        <img src="img/caminando/aside-03.jpg" alt="illustration mexique">
                        <p>Un itinéraire complet, de Mexico au
                            Yucatán</p>
                    </li>
                    <li>
                        <img src="img/caminando/aside-04.jpg" alt="illustration mexique">
                        <p>Une approche originale, à pied, des sites
                            mayas</p>
                    </li>
                </ul>
            </aside>

        </div>
    </section>


</main>


</html>

<?php require_once "layout/footer.php" ?>
