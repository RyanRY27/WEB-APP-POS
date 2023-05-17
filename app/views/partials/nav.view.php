<nav class="navbar navbar-expand-lg navbar-light bg-light pe-2" style="min-inline-size:350px" >
        <div class="container-fluid shadow">
        <img src=" ../public/assets/img/siitelogo.png  " height="60px" width="60x" class="ps-1 ms-4 my-2 img-fluid">
            <a class="navbar-brand ms-2" href="index.php?page=home"> <?=APP_NAME?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=home">My POS</a>
                </li>

            <?php if(Auth::access('owner')):?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=admin">Admin</a>
                </li>
            <?php endif;?>
               

            <?php if(Auth::access('admin')):?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=signup">Create User</a>
                </li>
            <?php endif;?>

             <?php if(!Auth::logged_in()):?>
                <li class="nav-item">
                <a class="nav-link" href="index.php?page=login">Login</a>
                </li>
            
            <?php else:?>
            </ul>
            <ul class="navbar-nav me-5 pe-2">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, <?=auth('username')?> (<?=AUTH::get('role')?>)<i class="fa fa-user-alt ms-2"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?page=profile">Profile</a></li>
                    <li><a class="dropdown-item" href="index.php?page=settings">Profile Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php?page=logout">Logout</a></li>
                </ul>
                </li>
            <?php endif;?>
            </ul>
             
            </div>
        </div>
    </nav>