<?php
if(!isset($_SESSION)) {session_start();}
require_once("db_connect.php");
$link = connect();

	if(isset($_POST["sub"])){
		$fname = mysqli_real_escape_string($link, $_POST["fname"]);
		$lname = mysqli_real_escape_string($link, $_POST["lname"]);
		$email = mysqli_real_escape_string($link, $_POST["email"]);
		$Pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
		$Cpwd = mysqli_real_escape_string($link, $_POST["cpwd"]);

		if($Pwd == $Cpwd && $Pwd != ""){
			$Pwd1 = password_hash($Pwd, PASSWORD_DEFAULT);

			$sql = "INSERT INTO users(first_name, last_name, user_email, user_password, date_created) VALUES ('$fname', '$lname', '$email', '$Pwd1', CURRENT_TIMESTAMP)";
			$query = "SELECT * FROM users WHERE user_email = '$email'";
			$result = mysqli_query($link, $query);

			if(mysqli_num_rows($result) <= 0){
				if(insert($sql)=="success"){
					$_SESSION['msg'] = "Registration success";
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

	if(isset($_POST["login"])){
		$Email = mysqli_real_escape_string($link, $_POST["email"]);
		$Pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
		$query = "SELECT * FROM users WHERE user_email = '$Email'";
		$result = mysqli_query($link, $query);

		if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_array($result)) {
					if(password_verify($Pwd, $row["user_password"])){
						echo "Correct Login";
						$_SESSION['userid'] = $row['user_id'];
						$_SESSION['email']=$row['user_email'];
						$_SESSION['username']=$row['user_name'];
						header("Location: test_auth.php");
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

?>
