<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="615106965069-55mjfn0j0eoqfli2nrbiipfp2l8a8eka.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
            <p style="text-align: center; color: gray;">Or</p>
            <div class="well">
              <center><div class="g-signin2" data-onsuccess="onSignIn" data-width="240" data-height="50" data-longtitle="true"></div></center>
              <br><br>
            </div>
            <p style="text-align: center; color: black;">Don't have an account yet?</p>
            <p style="text-align: center;"><a href="signup.php" style="text-decoration: none; color: gray; font-size: 18px;">Sign Up</a></p>
        </form>
    </div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        window.location.href = "server_auth.php?g_l="+profile.getEmail()+"&g_img="+profile.getImageUrl()+"";
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
    <style media="screen">

.well {
text-align : center;
}
a:link {
  text-decoration : none;
  font-family : Station Medium;
  font-size:24px;
}
    </style>
</body>
</html>
