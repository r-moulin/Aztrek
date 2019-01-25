<?php
require_once "model/database.php";
require_once "functions.php";


$voyages = getAllSejoursTop(3);
$lands = getAllPays();


require_once "layout/header.php" ?>

    <div class="background-principal">
        <main>
            <section class="destination-moment container">
                <div class="title-section container flex">

                    <h2>Destination du moment</h2>
                    <h3>Trouvez le trek qui vous convient</h3>
                </div>

                <article class="d-flex bd-highlight mt-5">
                    <?php foreach ($voyages as $voyage) : ?>
                        <?php include "include/sejour_inc.php" ?>
                    <?php endforeach; ?>
                </article>


            </section>
            <section class="destinations-all ">
                <div class="title-section container flex">
                    <h2>une envie, un pays</h2>
                    <h3>Un trek, un pays</h3>
                </div>
                <article class="owl-carousel owl-theme">
                    <?php foreach ($lands as $key => $land) :?>
                        <div class="carousel-<?=  $key + 1;  ?> carousel">
                            <img src="uploads/<?=  $land['image'];  ?>" alt="">
                            <div class="content-card">
                                <h4 ><?=  $land['sous_titre'];  ?></h4>
                                <h3><?=  $land['nom'];  ?></h3>
                                <?=  $land['description_courte'];  ?>
                                <a href=liste_sejours.php?id="<?= $land['id'] ;  ?>" class="btn-more btn-small">En savoir plus</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </article>
            </section>

        </main>
        <section class="quote-social container">
            <article class="quote">
                <div class="quote-content  flex">
                    <h2>Ils en parlent pour vous</h2>
                    <p>Superbe découverte d’une région du Yucatan, d’une culture Maya forte en
                        histoire, de paysage magnifiques, des guides irréprochables qui nous on fait
                        découvrir le Mexique comme jamais. Un très grand merci à toute l’équipe, c’est
                        mon premier voyage Avec Aztrek, et je regarde déjà pour repartir rapidement
                        faire un nouveau trek.</p>
                    <div class="quoteur  flex">
                        <div class="identity flex">
                            <img src="./img/temoignage-anne.jpg" alt="Anne qui témoigne">
                            <p>Mexique, le 24/06/2018 <br>
                                Anne - RENNES</p>
                        </div>
                        <a href="" class="btn-more">En savoir plus</a>
                    </div>
                </div>
            </article>
            <article class="instagram-photo container flex">
                <h2>#AZTREK</h2>
                <h3>Rejoignez notre communautée de Trekkeur et publiez vos photos sur Instagram</h3>
                <div class="galerie container flex">
                    <div class="insta-rwd-gal">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-3.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-4.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-5.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-6.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal hidden-xs">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-7.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal hidden-xs">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-8.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal hidden-xs">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-9.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal hidden-xs">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-10.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal hidden-xs">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-1.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                    <div class="insta-rwd-gal hidden-xs">
                        <a target="_blank" href="instagram">
                            <img src="./img/insta-2.jpg" alt="">
                            <div class="gallery">
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </section>
        <section class="actu container flex">
            <article class="flex ">
                <h2>#Concours</h2>
                <h3>Des cadeaux ça fait toujours plaisir</h3>
                <div class="actu-content flex">
                    <img src="./img/concours.jpg" alt="">
                    <div class="actu-txt">
                        <p>En décembre, envoyez-nous vos plus belles photos réalisées lors de treks.Paysages
                            grandioses,
                            marcheurs
                            sur les sentiers, bivouac sous un ciel étoilé, refuge isolé sous la neige, caravane de
                            mules en
                            pleine
                            ascension… Partagez vos images avec les autres voyageurs en publiant vos photos sur le
                            Aztrek.com
                            dans
                            l’espace Photos de voyage sur le forum.</p>
                        <p><b>Pour participer, c’est très simple, un compte Aztrek suffit.</b></p>
                        <ul>
                            <li>Je crée un compte sur Atrek.com (si je n’en ai pas déjà un)</li>

                            <li>J’envoie des photos via le forum (vous multiplierez vos chances en proposant plusieurs
                                images
                                mais 1 seule photo gagnante sera retenue par photographe)
                            </li>
                        </ul>

                    </div>
                </div>
                <a href="" class="btn-more">En savoir plus</a>
            </article>
        </section>
    </div>
<?php
    require_once("layout/footer.php") ;?>