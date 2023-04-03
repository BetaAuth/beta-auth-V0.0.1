<?php

 /* ---- MySql DataBase Connection Details ----
 *	Enter Your DataBase Connection Details Below
 */
$server = '';
$username = '';
$password = '';
$database = '';

$conn = mysqli_connect($server, $username, $password, $database);

if (mysqli_error()) {
	die('ERROR: DataBase Failed To Connect');
}
?>
