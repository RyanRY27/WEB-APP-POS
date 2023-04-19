<?php require viewpath('partials/head');?>

<div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow">

        <form method="post">
            <center>
                <h3><i class="bi bi-cart-check-fill"></i> Sign Up</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" autofocus>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="username" class="form-control" id="exampleFormControlInput1" placeholder="@username">
            </div>

            <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Password123">
                <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
            <label for="inputPassword5" class="form-label">Retype Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Password123">
        
            <br>
            <button class="btn btn-primary float-end">Signup</button>
            <button class="btn btn-danger">Cancel</button>
        </form> 
</div>
    
<?php require viewpath('partials/foot');?>
