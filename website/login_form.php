<?php
	// requirements
	session_start();

	$_SESSION["error"] = false;
	$_SESSION["errMsg"] = "";
	$_SESSION["username"] = "";
	$_SESSION["loggedIn"] = false;

	// connect to server and select database
	$link = mysqli_connect("localhost", "root", "", "breakers") or die($link);
	mysqli_connect("localhost", "root", "", "breakers") or die($link);

	// get values from form
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$username = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $password);
	
	//query the database for user
	if(isset($_POST['login'])){
		$result = mysqli_query($link, "SELECT * FROM accounts WHERE acc_Name = '$username' AND acc_Pass = '$password';") or die("Failed to query database " .mysql_error());
		$fetch = mysqli_fetch_array($result);
		if ($fetch['acc_Name'] == $username &&  $fetch['acc_Pass'] == $password){
			$_SESSION["error"] = false;
			$_SESSION["username"] = $fetch['acc_Name'];
			$_SESSION["loggedIn"] = true;
			$_SESSION["errMsg"] = "Login Successful";
			header("location: menu.php");
		} 	 
		elseif($fetch['acc_Name'] != $username &&  $fetch['acc_Pass'] != $password){
			$_SESSION["error"] = true;
			$_SESSION["errMsg"] = "Failed to login";
			header("location: login.php");
		}
	}
?>