<?php
    session_start();
    require_once("db_connect.php");
    $link = connect();

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

    if(isset($_POST["save"])){
        $fname = mysqli_real_escape_string($link, $_POST["full_name"]);
        $uname = mysqli_real_escape_string($link, $_POST["user_name"]);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $about = mysqli_real_escape_string($link, $_POST['about']);
        $uid = $_SESSION['user_id'];

        if(!isset($_FILES['img'])){
            $sql = "UPDATE users SET full_name = '$fname', user_name = '$uname', user_email = '$email', user_about = '$about' WHERE user_id = '$uid'";
        }else{
            $image = $_FILES['img'];

            $original_file_name = $_FILES['img']['name'];
            $file_tmp_location = $_FILES['img']['tmp_name'];

            $file_type = substr($original_file_name, strpos($original_file_name, '.'), strlen($original_file_name));
            $file_path = "Images/";

            $new_file_name = time().$file_type;

            if(move_uploaded_file($file_tmp_location, $file_path.$new_file_name)){
                $sql = "UPDATE users SET full_name = '$fname', user_name = '$uname', user_email = '$email', user_about = '$about', user_image = '$new_file_name' WHERE user_id = '$uid'";
            }else{
                echo "There was an error uploading the image";
            }
        }

        if(insert($sql)=="success"){
            echo "<script>alert('Success')</script>";
            header("Location: ../profile.php");
        } else{
            echo "<script>alert('Please try again')</script>";
        }
    }

    if(isset($_POST['save_pwd'])){
        $o_pwd = $_POST['o_pwd'];
        $n_pwd = $_POST['n_pwd'];
        $c_npwd = $_POST['c_npwd'];

        if($n_pwd == $c_npwd && $n_pwd != null && $c_npwd != null){

            $n_pwd = password_hash($n_pwd, PASSWORD_DEFAULT);
            $c_npwd = $_POST['c_npwd'];
            $uid = $_SESSION['user_id'];


            $query = "SELECT * FROM users WHERE user_id = $uid";
            $result = mysqli_query($link, $query);

            if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_array($result)) {
                        if(password_verify($o_pwd, $row["user_password"])){
                            $query = "UPDATE users SET user_password = '$n_pwd' WHERE user_id = '$uid'";
                            if(insert($query)=="success"){
                                //echo "<script>alert('Success')</script>";
                                $_SESSION['msg'] = "Password changed successfully";
                                header("Location: ../passwd.php");
                            } else{
                                echo "<script>alert('Please try again')</script>";
                                $_SESSION['msg'] = "Password failed to update. Please try again";
                                header("Location: ../passwd.php");
                            }
                        }else{
                            $_SESSION['msg'] = "Old Password Incorrect";
                            echo "<script>alert('Please again')</script>";
                            header("Location: ../passwd.php");
                        }
                    }
            }else{
                $_SESSION['msg'] = "User does not exist";
                header("Location: login.php");
            }
        }else{
            $_SESSION['msg'] = "Confirm your password!!!";
            header("Location: ../passwd.php");
        }
    }

    if(isset($_POST['sub'])){
        $iname = $_POST['issue'];
        $idesc = $_POST['desc'];
        $uid = $_SESSION['user_id'];

        $query = "INSERT INTO issues (issue_by, issue_name, issue_desc, issue_date) VALUES ('$uid', '$iname', '$idesc', CURRENT_DATE)";

        if(insert($query) == "success"){
            $_SESSION['msg'] = "Posted successfully";
            header("Location: ../help_center.php");
        }else{
            $_SESSION['msg'] = "There was an error. Please try again";
            header("Location: ../help_center.php");
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "UPDATE issues SET status='Resolved' WHERE issue_id = '$id'";

        if(insert($query) == "success"){
            header("Location: ../common.php?name=issues");
        }else{
            echo "<script>alert('Please try again')</script>";
        }
    }

    if (isset($_GET['delete_id'])) {
        $delete_id  = (int) $_GET['delete_id'];

        // Delete topic with id
        $sql        = "DELETE FROM topics WHERE topic_id='$delete_id'";
        $stm        = $connect->prepare($sql);

        // success
        if($stm->execute()){
            //echo "Deleted Successfully";
            //echo "<br><br>";
            header("Location: ../common.php");
        } else {
            echo "<script>alert('Please try again')</script>";
        }
    }
?>