<?php
include '../User/Post_Com/config.php';
include_once '../../src/auth/db_connect.php';
$link = connect();
if(isset($_POST['btn_action']))
{
	if($_POST['btn_action'] == 'Add')
	{
		$query = "SELECT * FROM users WHERE user_email = '".$_POST['user_email']."' or user_name = '".$_POST['user_name']."'";
		$result = mysqli_query($link, $query);
		if(mysqli_num_rows($result) == 0){
		$query = "
		INSERT INTO users (full_name,user_name,user_email,user_password,user_type,user_status)
		VALUES (:full_name,:user_name,:user_email,:user_password,:user_type,:user_status)
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':full_name'=>	$_POST["full_name"],
				':user_name'		=>	$_POST["user_name"],
				':user_email'		=>	$_POST["user_email"],
				':user_password'	=>	password_hash($_POST["user_password"], PASSWORD_DEFAULT),
				':user_type'		=>	'User',
				':user_status'		=>	'active'
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>New User Added</div>';
		}
	} else {
		echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>User already exists</div>';
	}
}
	if($_POST['btn_action'] == 'fetch_single')
	{
		$query = "
		SELECT * FROM users WHERE user_id = :user_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':user_id'	=>	$_POST["user_id"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['full_name'] = $row['full_name'];
			$output['user_email'] = $row['user_email'];
			$output['user_name'] = $row['user_name'];
		}
		echo json_encode($output);
	}
	if($_POST['btn_action'] == 'Edit')
	{
		if($_POST['user_password'] != '')
		{
			$query = "
			UPDATE users SET
			 full_name = '".$_POST["full_name"]."',
				user_name = '".$_POST["user_name"]."',
				user_email = '".$_POST["user_email"]."',
				user_password = '".password_hash($_POST["user_password"], PASSWORD_DEFAULT)."'
				WHERE user_id = '".$_POST["user_id"]."'
			";
		}
		else
		{
			$query = "
			UPDATE users SET
			  full_name = '".$_POST["full_name"]."',
				user_name = '".$_POST["user_name"]."',
				user_email = '".$_POST["user_email"]."'
				WHERE user_id = '".$_POST["user_id"]."'
			";
		}
		$statement = $connect->prepare($query);
	 if($statement->execute()){
		 $result = $statement->fetchAll();
 		if(isset($result))
 		{
 			echo '<div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>User Details Edited</div>';
 		}
	} else{
		echo '<div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>User Name or Email is already in use by another user</div>';
	}

	}
	if($_POST['btn_action'] == 'delete')
	{
		$status = 'active';
		if($_POST['status'] == 'active')
		{
			$status = 'inactive';
		}
		$query = "
		UPDATE users
		SET user_status = :user_status
		WHERE user_id = :user_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':user_status'	=>	$status,
				':user_id'		=>	$_POST["user_id"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'User Status changed to ' . $status;
		}
	}
}

?>
