<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="signup-container">
        <div class="container">
            <div class="camp-image">
                <div class="overlay-color">
                    <h1 style="font-family: 'Permanent Marker', cursive; margin: auto; color: white; text-align: center; position: relative; top: 240px; font-size: 50px;">Educo</h1>
                    <p style="position: relative; top: 330px; text-align: center; color: white;">Or Sign Up using</p>
                    <ul style="position: relative; top: 330px; display: flex; flex-direction: row; margin-left: 30px; margin-right: 70px; margin-bottom: 50px;">
                        <li class="signup-list"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li class="signup-list"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li class="signup-list"><i class="fa fa-google" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
            <form class="signup-form" action="server_auth.php" method="POST">
                <h3 style="text-align: center; font-size: 30px;">Sign up</h3>
                <center><p style="color:brown"><?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg']; unset($_SESSION['msg']);}?></p></center>
                <label for="fullname">Full Name</label><br>
                <input type="text" id="fullname" name="fullname" placeholder="e.g. John Doe"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" placeholder="e.g. name@example.com"><br>
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" placeholder="e.g. @JDoe"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="pwd" placeholder="Enter your password"><br>
                <label for="confirmpassword">Confirm Password</label><br>
                <input type="password" id="confirmpassword" name="cpwd" placeholder="Re-enter your password">
                <input id="button" type="submit" name="sub" value="SIGNUP">
                <p style="text-align: center; color: gray;">Already have an account?</p>
                <p style="text-align: center;"><a href="login.php" style="text-decoration: none; color: gray; font-size: 18px;">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
