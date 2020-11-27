<?php
$connect = new PDO("mysql:host=localhost; dbname=educo", "root", "");
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "educo"; /* Database name */

 $con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
	function runQuery($query,$con) {
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}

	function numRows($query) {
		$result  = mysqli_query($con,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}

	function updateQuery($query,$con) {
		$result = mysqli_query($con,$query);
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		} else {
			return $result;
		}
	}

	function insertQuery($query) {
		$result = mysqli_query($con,$query);
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		} else {
			return $result;
		}
	}

	function deleteQuery($query) {
		$result = mysqli_query($con,$query);
		if (!$result) {
			die('Invalid query: ' . mysqli_error());
		} else {
			return $result;
		}
}
