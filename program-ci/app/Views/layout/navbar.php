<nav class="main-header navbar navbar-expand navbar-<?= env('THEME_COLOR') ?> navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Fullscreen"> <i class="fas fa-expand-arrows-alt"></i></a>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="/uploads/thumbnail/default-profile.jpg" class="user-image img-circle elevation-2">
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-<?= env('THEME_COLOR') ?>">
                    <img src="/uploads/thumbnail/default-profile.jpg" class="img-circle elevation-2">
                </li>

                <li class="user-footer">
                    <a href="/profil" class="btn btn-default btn-flat">Profil</a>
                    <a href="/auth/logout" class="btn btn-default btn-flat float-right">Keluar</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>