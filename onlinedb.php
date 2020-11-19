<?php

function connect(){
	$link = mysqli_connect("sql305.epizy.com", "epiz_27212497", "c97bnqwg", "epiz_27212497_educo");

	if(!$link){
		die("Could not connect to the database".mysqli_connect_error());
	} else {
    echo "Success";
  }

	return($link);
}
//connect();
function insert($sql){
	$link = connect();

	if(mysqli_query($link, $sql)){
		return "success";
	}else{
		return "Could not update".mysqli_error($link);
	}
}
?>
<?php
// we connect to example.com and port 3307
$link = mysqli_connect('sql305.epizy.com:3306', 'epiz_27212497', 'c97bnqwg');
if (!$link) {
    die('Could not connect: ' .mysqli_connect_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>
