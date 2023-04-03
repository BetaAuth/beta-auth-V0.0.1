<?php
/**
 * BrebKat 2023 - BetaAuth V0.0.1 Open-Source
 */

include('dbconn.php');

class betaauth
{
	
	function login($username, $password)
	{
		$usrsql = "SELECT * FROM `users` WHERE 'username' = " . $username . ";";
		$usrquery = mysqli_query($usrsql, $conn);
		$usrdata = mysqli_fetch_num_rows($usrquery);

		if (password_verify($password, $usrdata['password'])) {
			return true;
		}
		else {
			return false;
		}
	}
	function sign_up($username, $password, $cpassword, $email) {
		$sql1 = "SELECT * FROM `users` WHERE `username` = " . $username . ";";
		$query1 = mysqli_query($sql1, $conn);
		$rows1 = mysqli_fetch_num_rows($query1);

		if ($rows1 < 1 and $password == $cpassword and str_contains($email, '@') and str_contains($email, '.')) {
			$sql2 = "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('" . $username . "','" . $password . "','" . $email . "');";
			$query2 = mysqli_query($sql2, $conn);
			return true;
		}
		else {
			return false;
		}
	}	
}
