<?php include('server.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="static/css/style.css">
    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="POST" action="login.php">
            <?php include('errors.php')?>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>

            <p>
                <a href="signup.php">I don't have an account</a>
            </p>
        </form>
    </body>
</html>