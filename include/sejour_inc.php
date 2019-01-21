


<article>
    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>" class="d-flex ">
        <img src="uploads/<?= $sejour{"image"}; ?>" alt="<?= $sejour{"nom"}; ?>" class="img-responsive col_center">
    </a>
    <h4><a href="sejour.php?id=<?php echo $sejour["id"]; ?>"> Cap vers le <?= $sejour{"nom"}; ?></a></h4>

    <p><?= $sejour{"description"}; ?></p>
    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>" class="btn-more"> En savoir plus</a>
</article>