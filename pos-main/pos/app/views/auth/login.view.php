<?php require viewpath('partials/head');?>

<div class="container-fluid border col-lg-4 col-md-5 mt-5 mb-3 p-4 shadow">

        <form method="post">
            <center>
                <h1><i class="fa fa-user-alt"></i></h1>
                <h3>Log In</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control <?=!empty($errors['email']) ? 'border-danger':''?>" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                <?php if(!empty($errors['email'])):?>
                    <small class="text-danger"><?=$errors['email']?></small>
                <?php endif;?>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control <?=!empty($errors['password']) ? 'border-danger':''?>" id="floatingPassword" placeholder="password">
                <label for="floatingPassword">Password</label>
                <?php if(!empty($errors['password'])):?>
                    <small class="text-danger"><?=$errors['password']?></small>
                <?php endif;?>
            </div> 
            <div class="col-auto">
                <div class="mt-2 form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                    Remember me
                </label>
                </div>
            </div>  
                    
            <br>
            <div class="row">
                <button class="btn btn-primary" style="font-size: 16px">Log In</button>
            </div>
        </form> 
</div>
    
<?php require viewpath('partials/foot');?>