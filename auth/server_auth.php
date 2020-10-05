<?php
require_once("db_connect.php");
$link = connect();

	if(isset($_POST["sub"])){
		$Fname = mysqli_real_escape_string($link, $_POST["fname"]);
		$Lname = mysqli_real_escape_string($link, $_POST["lname"]);
		$Email = mysqli_real_escape_string($link, $_POST["email"]);
		$Pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
		$Cpwd = mysqli_real_escape_string($link, $_POST["cpwd"]);

		if($Pwd == $Cpwd && $Pwd != ""){
			$Pwd = password_hash($Pwd, PASSWORD_DEFAULT);

			$sql = "INSERT INTO users(first_name, last_name, user_email, user_password, date_created) VALUES ('$Fname', '$Lname', '$Email', '$Pwd', CURRENT_TIMESTAMP)";

			insert($sql);
			header("Location: login.php");
		}else{?>
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
					}else{
						echo "Incorrect Login";
						header("Location: login.php");
					}
				}
		}else{
			echo '<script>alert("Incorrect Login details")</script>';
		}
	}

?>