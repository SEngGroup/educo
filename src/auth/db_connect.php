<?php

function connect(){
	$link = mysqli_connect("localhost", "root", "Hello@world2020", "educo");

	if(!$link){
		die("Could not connect to the database".mysqli_connect_error());
	}

	return($link);
}

function insert($sql){
	$link = connect();

	if(mysqli_query($link, $sql)){
		return "success";
	}else{
		return "Could not update".mysqli_error($link);
	}
}
?>
