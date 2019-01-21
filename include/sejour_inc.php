


<article>
    <a href="sejour.php?id=<?php echo $voyage["id"]; ?>" class="d-flex ">
        <img src="uploads/<?= $voyage{"image"}; ?>" alt="<?= $voyage{"nom"}; ?>" class="img-responsive col_center">
    </a>
    <h4><a href="sejour.php?id=<?php echo $voyage["id"]; ?>"> Cap vers le <?= $voyage{"nom"}; ?></a></h4>

    <p><?= $voyage{"description"}; ?></p>
    <a href="sejour.php?id=<?php echo $voyage["id"]; ?>" class="btn-more"> En savoir plus</a>
</article>