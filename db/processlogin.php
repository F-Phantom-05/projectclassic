<?php

	include "db/db_connection.php";
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM strav WHERE email = '$email' AND passord = '$password'";
	$result = $conn -> query ($sql);
	$row = mysqli_fetch_array($result);


	if ($email == isset($row['username']) && $password == isset($row['Password']))
	{
		$_SESSION['hasLogin'] = 1;
		header("location: index.php");
	}
	else
	{
		echo "Invalid Account";
	}
?>