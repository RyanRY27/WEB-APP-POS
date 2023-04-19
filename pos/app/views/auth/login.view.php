<?php require viewpath('partials/head');?>

<div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow">

        <form method="post">
            <center>
                <h1><i class="fa fa-user-alt"></i></h1>
                <h3>Log In</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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