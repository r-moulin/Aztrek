<article>

    <h2><a href="sejour.php?id=<?php echo $sejour["id"]; ?>"><?= $sejour{"nom"}; ?></a></h2>
    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
        <img src="uploads/<?= $sejour{"image"}; ?>" alt="<?= $sejour{"nom"}; ?>"class="img-responsive">
    </a>


    <p><?= $sejour{"description"}; ?></p>


    <footer>


    </footer>
</article>