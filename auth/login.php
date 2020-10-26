<?php if(!isset($_SESSION)) {session_start();}?>
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

        <form method="POST" action="server_auth.php">
            <?php //include('errors.php')?>
            <div class="input-group">
              <p style="color:brown"><?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg']; unset($_SESSION['msg']);}?></p>
                <label for="email">Email</label>
                <input type="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="pwd" required placeholder="Enter your password">
            </div>

            <div class="input-group">
                <input type="submit" name="login" class="btn" value="Log In">
            </div>

            <p>Don't have an account?
                <a href="signup.php">Sign Up</a>
            </p>
        </form>
    </body>
</html>
