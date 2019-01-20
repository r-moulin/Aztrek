<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo SITE_ADMIN; ?>">Administration</a>
    <ul class="navbar-nav px-3 flex-row">
        <li> <a class="nav-link mr-3" href="<?php echo SITE_URL ?>" >
                Retour au site
            </a>  </li>
        <li class="nav-item dropdown" >

            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                moulin.r1@gmail.com
            </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i>
                    Mon profile
                </a>

                <a href="<?php echo SITE_ADMIN; ?>logout.php" class="dropdown-item">
                    <i class="fa fa-sign-out"></i>
                    Déconnexion
                </a>
            </div>
        </li>
    </ul>
</nav>