<nav class="navbar navbar-expand-lg navbar-light bg-light" style="min-inline-size:350px">
        <div class="container-fluid shadow">
        <img src="../public/assets/img/siitelogo.png  " height="60px" width="60x" class="img-fluid">
            <a class="navbar-brand" href="index.php?page=home"> <?=APP_NAME?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=home">Sales</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=admin">Admin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=login">Log In</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=signup">Sign Up</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    User
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                    <li><a class="dropdown-item" href="index.php?page=settings">Profile Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php?page=logout">Logout</a></li>
                </ul>
                </li>
                
            </ul>
            
            </div>
        </div>
    </nav>