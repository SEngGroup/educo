
<!DOCTYPE html>
<html>
    <head>
        <title>Test Auth</title>
        <link rel="stylesheet" href="static/css/style.css">
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="615106965069-55mjfn0j0eoqfli2nrbiipfp2l8a8eka.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>

    <body>
        <div class="header">
            <h2>Auth Works!</h2>
        </div>

        <div class="content">

            <?php if(isset($_SESSION['success'])) :?>
                <div class="error success">
                    <h3>
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <?php if(isset($_SESSION['email'])) : ?>
                <p>
                    Welcome, <?php echo $_SESSION['email'];?>
                </p>
                <p>
                    <a href="test_auth.php?logout='1" style="color:red; margin:5px">
                        Logout
                    </a>
                    <a href="../../Forum/User/forum.php?" style="color:green;">
                        View Forums
                    </a>
                </p>
            <?php endif ?>
        </div>
        <?php
            session_start();

            if (!isset($_SESSION['email'])){
                $_SESSION['msg'] = "You must log in first";
                header('location: login.php');
            }
            if (isset($_GET['logout'])){
              unset($_SESSION['username']);
              unset($_SESSION['email']);
              session_unset();
              session_destroy();
              session_start();
              $_SESSION['msg'] = "You are now logged out";
              header("Location: login.php");
              ?>
              <?php
            }
        ?>

    </body>
</html>
