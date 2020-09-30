<?php include('server.php')?>
<! DOCTYPE html>
<html>
    <head>
        <title>Onboard</title>
        <link rel="stylesheet" href="static/css/style.css">
    </head>

    <body>
        <div class="header">
            <h2>Sign Up</h2>
        </div>

        <form action="signup.php" method="POST">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <label for="password_conf">Confirm Password</label>
                <input type="password" name="password_1">
            </div>

            <p>
                By signing up, you agree to our <a href="#">TOS and Privacy Policy</a>
            </p> 

            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Sign Up</button>
            </div>

            <p>
                I have an account. <a href="login.php">Sign In</a>
            </p>    
        </form>
    </body>
</html>

