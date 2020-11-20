<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="login-container1">
        <form class="login-form" method="post" action="server_auth.php">
            <h3 style="text-align: center; font-size: 30px;">Login</h3>
            <center><p style="color:brown"><?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg']; unset($_SESSION['msg']);}?></p></center>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="Enter your email" required><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="pwd" placeholder="Enter your password" required>
            <p style="font-size: 12px; color: gray; position: relative; left: 240px; bottom: 20px;">Forgot password?</p>
            <input id="button" name="login" type="submit" value="LOGIN">
            <p style="text-align: center; color: gray;">Or Sign in using</p>
            <ul style="display: flex; flex-direction: row; margin-left: 30px; margin-right: 70px; margin-bottom: 50px;">
                <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                <li><i class="fa fa-google" aria-hidden="true"></i></li>
            </ul>
            <p style="text-align: center; color: gray;">Don't have an account?</p>
            <p style="text-align: center;"><a href="signup.php" style="text-decoration: none; color: gray; font-size: 18px;">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
