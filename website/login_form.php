<?php
	// requirements
	session_start();

	//msg definition so there is no notice
	$msg = "";

	// connect to server and select database
	mysqli_connect("localhost", "root", "", "mastermind") or die($link);
	$link = mysqli_connect("localhost", "root", "", "mastermind") or die($link);

	// get values from form
	$username = $_POST['username'] ?? '';
	$password = $_POST['password'] ?? '';
	
	// to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$username = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $password);
	
	// connect to the server and select database
	mysqli_connect("localhost", "root", "", "mastermind");
	
	//query the database for user
	if(isset($_POST['login'])){
		$result = mysqli_query($link, "select * from accounts where Acc_Name = '$username' and Acc_Pass = '$password';")
							or die("Failed to query database " .mysql_error());
		$login = mysqli_fetch_array($result);
		if ($login['Acc_Name'] === $username &&  $login['Acc_Pass'] === $password){
			$msg = "Login gelukt ".$login['Acc_Name'];
			header("location: menu.html");
		} 	else	{
			$msg = "Failed to login";
		}
	}
?>