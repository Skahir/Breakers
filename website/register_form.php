<?php
	// starting of a session
	session_start();

	/*
	if( isset($_SESSION['user'])!="" ){
  	header("Location: home.php");
 	}
 	*/

	// a switch for if an error is found
	$error = false;

	// a temporary workaround so there is no notice
	$_SESSION["errmsg"] = "";

	// connect to the server and select database
	mysqli_connect("localhost", "root", "", "balls") or die($link);
	$link = mysqli_connect("localhost", "root", "", "balls") or die($link);


	//$nameCheck = "select Acc_Name from accounts where Acc_Name = $_POST['username']";


	// get values from form
	$username = $_POST['username'] ?? '';
	$mail = $_POST['mail'] ?? '';
	$mail2 = $_POST['mail2'] ?? '';
	$password = $_POST['password'] ?? '';
	$password2 = $_POST['password2'] ?? '';

	// to prevent mysql injection
	$username = stripcslashes($username);
	$mail = stripcslashes($mail);
	$mail2 = stripcslashes($mail2);
	$password = stripcslashes($password);
	$password2 = stripcslashes($password2);
	
	$username = mysqli_real_escape_string($link, $username);
	$mail = mysqli_real_escape_string($link, $mail);
	$mail2 = mysqli_real_escape_string($link, $mail2);
	$password = mysqli_real_escape_string($link, $password);
	$password2 = mysqli_real_escape_string($link, $password2);
	
if (isset($_POST['register'])){

	// checking the boxes
	if ( empty($username) || empty($mail) || empty($mail2) || empty($password) || empty($password2) ){
		$error = true;
		$_SESSION["errmsg"] = "All fields are required";
	}
/*
	//check if username is already in use
	elseif ($username == $dbName){
		$error = true
		$errMsg = "That username is already taken.";
	}
*/
	//check if name is atleast 3 characters long
	elseif (strlen($username) < 3){
		$error = true;
		$_SESSION["errmsg"] = "username must have atleast 3 characters.";
	}

	// checking if the passwords add up
	elseif ($password != $password2){
		$error = true;
		$_SESSION["errmsg"] = "password needs to be the same.";
	}

	// checking if password is atleast 6 characters long
	elseif (strlen($password) < 6){
		$error = true;
		$_SESSION["errmsg"] = "password must have atleast 6 characters.";
	}
	
	// checking if the mails add up
	elseif ($mail != $mail2){
		$error = true;
		$_SESSION["errmsg"] = "E-mail needs to be the same.";
	} else {

		// checking if the email is already in use
		$query = "SELECT Acc_mail FROM accounts WHERE Acc_mail = '$mail'";
		$result = mysqli_query($link, $query);
		$count = mysqli_num_rows($result);
		if ($count != 0){
			$_SESSION["errmsg"] = "Provided Email is already in use.";
		} 
	}

	// if there's no error, add the row with the info
	if (!$error){
	$result = mysqli_query($link, "INSERT INTO accounts (acc_ID, acc_Name, acc_Pass, acc_Mail) VALUES (NULL, '$username', '$password', '$mail')") or die("Failed to query database" .mysqli_error($link));

		if($result){
<<<<<<< HEAD
			$_SESSION["errmsg"] = "You have successfully registered, you may login now";
		} else {
			$_SESSION["errmsg"] = "Something went wrong, try again later...";
=======
			$errMsg = "You have successfully registered, you may login now";
			header("location: login.html");
		} else {
			$errMsg = "Something went wrong, try again later...";
			header("location: register.html");
>>>>>>> f03b98c479bb39694940da6ea7eb479e56e52a30
		}
	}	
}

?>