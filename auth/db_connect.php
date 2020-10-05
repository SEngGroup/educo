<?php
	
function connect(){
	$link = mysqli_connect("localhost", "root", "", "educo");

	if(!$link){
		die("Could not connect to the database".mysqli_connect_error());
	}

	return($link);
}

function insert($sql){
	$link = connect();

	if(mysqli_query($link, $sql)){
		echo "Updated successfully";
	}else{
		echo "Could not update".mysqli_error($link);
	}
}
?>