<div class="sejour-card col-4  d-flex flex-column justify-content-between align-items-center " ">
<a href="sejour.php?id=<?php echo $voyage["id"]; ?>">
    <img src="uploads/<?= $voyage{"image"}; ?>" alt="<?= $voyage{"nom"}; ?>" class="img-responsive ">
</a>
<div class="content-sejour d-flex flex-column align-items-center my-5">
    <h4><a href="sejour.php?id=<?php echo $voyage["id"]; ?>"> Cap vers le <?= $voyage{"nom"}; ?></a></h4>


</div>
<a href="sejour.php?id=<?php echo $voyage["id"]; ?>" class="btn-more align-self-center center"> En savoir plus</a>
</div>