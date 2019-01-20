<?php
require_once "model/database.php";
$id = $_GET["id"];

$recipe = getOneRecette($id);
$ingredients = getAllIngredientByRecette($id);

require_once "layout/header.php" ?>

<header class="header-home">
    <div class="overlay"> 
        <?php require_once "layout/menu.php" ?>
    </div>
</header>

<main class="container">

    <section class="row">
        <div class="col-md-4">
            <img src="uploads/<?=  $recipe["image"];  ?>" alt="Poulet mariné" class="img-responsive">
        </div>
        <div class="col-md-4">
            <h1><?=  $recipe["titre"];  ?></h1>
            <p>
                <?=  $recipe["description"];  ?>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Ingrédients</h2>
            <ul>
                <?php foreach ($ingredients as $ingredient) :  ?>
                <li><?php echo $ingredient["qte"] . " " . $ingredient["unite"] . " " . $ingredient["libelle"]  ?></li>
                <?php endforeach;  ?>
            </ul>
        </div>
    </section>

    <div class="label"><a href="#" class="like"><i class="fa fa-heart"></i></a> <?=  $recipe{"nb_likes"};  ?></div>
    <div class="label"><i class="fa fa-cutlery"></i> <?=  $recipe["pays"];  ?></div>
    <div class="label"><i class="fa fa-user"></i><?=  $recipe["pseudo"];  ?> </div>

</main>


<?php require_once "layout/footer.php" ?>
