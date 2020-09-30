<?php
    session_start();

    //initialize variables
    $email  = "";
    $errors = "";

    //this is the db connection... Should be handled on a different file.
    $db     = mysqli_connect('localhost', 'root', '', 'educo');

    //Register User
    if(isset($_POST['reg_user'])){
        //get input
        $email      = mysqli_real_escape_string($db, $_POST['email']);
        $password   = mysqli_real_escape_string($db, $_POST['email']);
        $password1  = mysqli_real_escape_string($db, $_POST['[password_1]']);
    
        //validate form
        if(empty($email)){array_push($errors, "Email is required");}
        if(empty($password)){array_push($errors, "Password is required");}
        if($password != $password1){
            array_push($arrays, "Passwords don't match");
        }

        
        //check to see if the user is already registered.
        $checker_query  = "SELECT email FROM users WHERE email='$email'";
        $result         = mysqli_query($db, $checker_query);
        $user           = mysqli_fetch_assoc($result);

        if($user){
            array_push($errors, "User already exists");
        }

        if(count($errors)==0){
            $password               = md5($password);

            $query                  = "INSERT INTO users (email, password)
                                    VALUES ('$email', '$password')";
            mysqli_query($db, $query);
            $_SESSION['email']      = $email;
            $_SESSION['success']    = "Logged in";
            header('location: auth_test.php');        
        }
    }

    if(isset($_POST['login_user'])){
        $email      = mysqli_real_escape_string($db, $_POST['email']);
        $password   = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)){
            array_push($errors, "Email Required");
        }

        if(empty($password)){
            array_push($errors, "Password Required");
        }


        if (count($errors)==0){
            $password   = md5($password);
            $query      = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $results    = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1){
                $_SESSION['email']      = $email;
                $_SESSION['success']    = "Logged In";
                header('location: auth_test.php');
            }else{
                array_push($errors, "Wrong email or password");
            }
        }
    }
?>