<?php require viewpath('partials/head'); ?>

<body>
    <div class="container" >
        <form class="login-form">
            <div class="logo-container"></div>
            <h2>Login</h2>
            <div class="form-group">
                <input type="email" id="username" name="username" required>
                <label for="username">Email</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

<?php require viewpath('partials/foot'); ?>