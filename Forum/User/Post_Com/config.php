<?php
$connect = new PDO("mysql:host=localhost;dbname=educo", "root", "Hello@world2020");
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "Hello@world2020"; /* Password */
$dbname = "educo"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
