<?php
if(!isset($_SESSION)) {session_start();}
require_once("db_connect.php");
$link = connect();

	if(isset($_POST["sub"])){
		$fname = mysqli_real_escape_string($link, $_POST["fullname"]);
		$lname = mysqli_real_escape_string($link, $_POST["username"]);
		$email = mysqli_real_escape_string($link, $_POST["email"]);
		$Pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
		$Cpwd = mysqli_real_escape_string($link, $_POST["cpwd"]);

		if($Pwd == $Cpwd && $Pwd != ""){
			$Pwd1 = password_hash($Pwd, PASSWORD_DEFAULT);

			$sql = "INSERT INTO users(full_name, user_name, user_email, user_password, date_created) VALUES ('$fname', '$lname', '$email', '$Pwd1', CURRENT_TIMESTAMP)";
			$query = "SELECT * FROM users WHERE user_email = '$email'";
			$result = mysqli_query($link, $query);

			if(mysqli_num_rows($result) <= 0){
				if(insert($sql)=="success"){
					$_SESSION['msg'] = "Registration successful";
					header("Location: login.php");
				} else{
					$_SESSION['msg'] = "User already exists";
					header("Location: signup.php");
				}
		} else{
			$_SESSION['msg'] = "User already exists";
			header("Location: signup.php");
		}
		}else{
			$_SESSION['msg'] = "Passwords do not match";
			header("Location: signup.php");
			?>

			<script>alert("Passwords do not match")</script>
		<?php
		}
	}

//normal login
	if(isset($_POST["login"])){
		$Email = mysqli_real_escape_string($link, $_POST["email"]);
		$Pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
		$query = "SELECT * FROM users WHERE user_email = '$Email'";
		$result = mysqli_query($link, $query);

		if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_array($result)) {
					if(password_verify($Pwd, $row["user_password"])){
						echo "Correct Login";
						$_SESSION['full_name'] = $row['full_name'];
						$_SESSION['email']=$row['user_email'];
						$_SESSION['user_id']=$row['user_id'];
						$_SESSION['username']=$row['full_name'];
						$_SESSION['userabout'] = $row['user_about'];
						$_SESSION['userimage'] = $row['user_image'];
						header("Location: ../../index.php");
					}else{
						$_SESSION['msg'] = "invalid credentials";
						header("Location: login.php");
					}
				}
		}else{
			$_SESSION['msg'] = "User does not exist";
			header("Location: login.php");
			echo '<script>alert("Incorrect Login details")</script>';
		}
	}
	//google login
	if(isset($_GET["g_l"])){
		$Email = mysqli_real_escape_string($link, $_GET["g_l"]);
		$query = "SELECT * FROM users WHERE user_email = '$Email'";
		$result = mysqli_query($link, $query);

		if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_array($result)) {
						echo "Correct Login";
						$_SESSION['full_name'] = $row['full_name'];
						$_SESSION['email']=$row['user_email'];
						$_SESSION['user_id']=$row['user_id'];
						$_SESSION['username']=$row['full_name'];
						$_SESSION['userabout'] = $row['user_about'];
						$_SESSION['userimage'] = $_GET['g_img'];
						header("Location: ../../index.php");
				}
		}else{
			$_SESSION['msg'] = "User does not exist";
			header("Location: login.php");
			echo '<script>alert("Incorrect Login details")</script>';
		}
	}
	//
	if(isset($_POST["save"])){
		$fname = mysqli_real_escape_string($link, $_POST["full_name"]);
		$uname = mysqli_real_escape_string($link, $_POST["user_name"]);
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$about = mysqli_real_escape_string($link, $_POST['about']);
		$uid = $_SESSION['user_id'];

		if(empty($_FILES['img'])){
			$sql = "UPDATE users SET full_name = '$fname', user_name = '$uname', user_email = '$email', user_about = '$about' WHERE user_id = '$uid'";
			if(insert($sql)=="success"){
				echo "<script>alert('Success')</script>";
				header("Location: ../../Forum/User/profile.php");
			} else{
				echo "<script>alert('Please try again')</script>";
			}
		}else if(!empty($_FILES['img'])) {
			$image = $_FILES['img'];

			$original_file_name = $_FILES['img']['name'];
			$file_tmp_location = $_FILES['img']['tmp_name'];

			$file_type = substr($original_file_name, strpos($original_file_name, '.'), strlen($original_file_name));
			$file_path = "../../assets/images/";

			$new_file_name = time().$file_type;

			if(move_uploaded_file($file_tmp_location, $file_path.$new_file_name)){
				$sql = "UPDATE users SET full_name = '$fname', user_name = '$uname', user_email = '$email', user_about = '$about', user_image = '$new_file_name' WHERE user_id = '$uid'";
				if(insert($sql)=="success"){
					echo "<script>alert('Success')</script>";
					header("Location: ../../Forum/User/profile.php");
				} else{
					echo "<script>alert('Please try again')</script>";
				}
			}else{
				echo "There was an error uploading the image";
			}

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
								header("Location: ../../Forum/User/passwd.php");
							} else{
								echo "<script>alert('Please try again')</script>";
								$_SESSION['msg'] = "Password failed to update. Please try again";
								header("Location: ../../Forum/User/passwd.php");
							}
						}else{
							$_SESSION['msg'] = "Old Password Incorrect";
							echo "<script>alert('Please again')</script>";
							header("Location: ../../Forum/User/passwd.php");
						}
					}
			}else{
				$_SESSION['msg'] = "User does not exist";
				header("Location: login.php");
			}
		}else{
			$_SESSION['msg'] = "Confirm your password!!!";
			header("Location: ../../Forum/User/passwd.php");
		}
	}

	if(isset($_POST['issue'])){
		$iname = $_POST['issue'];
		$idesc = $_POST['desc'];
		$uid = $_SESSION['user_id'];

		$query = "INSERT INTO issues (issue_by, issue_name, issue_desc, issue_date) VALUES ('$uid', '$iname', '$idesc', CURRENT_DATE)";

		if(insert($query) == "success"){
			$_SESSION['msg'] = "Posted successfully";
			header("Location: ../../Forum/User/help_center.php");
		}else{
			$_SESSION['msg'] = "There was an error. Please try again";
			header("Location: ../../Forum/User/help_center.php");
		}
	}
?>


?>
