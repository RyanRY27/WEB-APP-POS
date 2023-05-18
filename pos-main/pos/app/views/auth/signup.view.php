<?php require viewpath('partials/head');?>

<div class="container-fluid border col-lg-4 col-md-5 mt-3 p-4 pt-5 shadow">

        <form method="post">
            <center>
                <h3><i class="fa fa-user-plus"></i> Create User</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

          

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input value="<?=set_value('email')?>" name="email"type="email" class="form-control <?=!empty($errors['email']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="name@example.com">
                <?php if(!empty($errors['email'])):?>
                    <small class="text-danger"><?=$errors['email']?></small>
                <?php endif;?>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input value="<?=set_value('username')?>" name="username" type="text" class="form-control <?=!empty($errors['username']) ? 'border-danger':''?>" id="exampleFormControlInput1" placeholder="Username">
                <?php if(!empty($errors['username'])):?>
                    <small class="text-danger"><?=$errors['username']?></small>
                <?php endif;?>
            </div>

            <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <select  name="gender" class="form-select  <?=!empty($errors['gender']) ? 'border-danger':''?>">
                        <option selected>Select Gender</option>
                        <option>male</option>
                        <option>female</option>
                    </select>
                    <?php if(!empty($errors['gender'])):?>
                        <small class="text-danger"><?=$errors['gender']?></small>
                    <?php endif;?>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Role</label>
                <div class="form-control">User</div>

            </div>


            <label for="inputPassword5" class="form-label">Password</label>
                <input name="password"type="password" id="inputPassword5" class="form-control <?=!empty($errors['password']) ? 'border-danger':''?>" aria-labelledby="passwordHelpBlock" placeholder="Password123">
                <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                <?php if(!empty($errors['password'])):?>
                    <small class="text-danger"><?=$errors['password']?></small>
                <?php endif;?>
            </div>

            <label for="inputPassword5" class="pt-3 form-label">Retype Password</label>
                <input name="password_retype"type="password" id="inputPassword5" class="form-control <?=!empty($errors['password_retype']) ? 'border-danger':''?>" aria-labelledby="passwordHelpBlock" placeholder="Password123">
                <?php if(!empty($errors['password_retype'])):?>
                    <small class="text-danger"><?=$errors['password_retype']?></small>
                <?php endif;?>
        
            <br>
            <button class="mb-3 mt-4 btn btn-primary float-end">Create</button>
            <a href="index.php?page=admin&tab=users">
                <button type="button" class="mb-3 mt-4 btn btn-danger">Cancel</button>
            </a>
        </form> 
</div>
    
<?php require viewpath('partials/foot');?>
