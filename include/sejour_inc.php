


<article class="col-6  sejour-top">
    <a href="sejour.php?id=<?php echo $voyage["id"]; ?>">
        <img src="uploads/<?= $voyage{"imge"}; ?>" alt="<?= $voyage{"nom"}; ?>" class="img-responsive col_center">
    </a>

    <h4><a href="sejour.php?id=<?php echo $voyage["id"]; ?>"> Cap vers le <?= $voyage{"nom"}; ?></a></h4>

    <?= $voyage{"description"}; ?>
    <a href="sejour.php?id=<?php echo $voyage["id"]; ?>" class="btn-more"> En savoir plus</a>
</article>