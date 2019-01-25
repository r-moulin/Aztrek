<?php require_once __DIR__ . '/../../functions.php';
require_once  __DIR__ . "/../../config/parameters.php";?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/admin/", true) ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>">
                    <i class="fa fa-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/pays/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/pays/">
                    <i class="fa fa-flag"></i>
                    Pays
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/sejour/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/sejour/">
                    <i class="fa fa-globe"></i>
                    Séjours
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/depart/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/depart/">
                    <i class="fa fa-book"></i>
                    Départs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/reservation/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/reservation/">
                    <i class="fa fa-book"></i>
                    Réservations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/team/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/team/">
                    <i class="fa fa-user"></i>
                    L'équipe
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/photos/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/photos/">
                    <i class="fa fa-book"></i>
                    Gestion des photos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/programme/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/programme/">
                    <i class="fa fa-book"></i>
                    Gestion des Programmes de trek
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-comments"></i>
                    Commentaires
                </a>
            </li>
        </ul>
    </div>
</nav>