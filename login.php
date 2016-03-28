<?php

	session_start();

	//includes the link to the database connection file
	include("connection.php");


	//If users does NOT have an account and is SIGNING UP
	if($_POST['submit'] == "Sign up")  {
	
		//If did not enter name
		if (!($_POST['name'])) $error .= "<br /> You have not entered a name. Who are you?!";
	
		//If did not enter email
		if (!($_POST['email'])) $error .= "<br /> You have not entered an email address. We cannot sign you up";
		
		//If did not enter age
		if (!($_POST['age'])) $error .= "<br /> You have not entered your age. ";
		
			//If did not enter proper email
			else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error .= "<br /> Please a valid email address. It is likely that you have not put an @ symbol in there.";
			
		//If did not enter an email address
		if(!($_POST['password'])) $error .= "<br /> You have not entered a password. How will you be safe?! :( ";
			else {
			//If the password is less than 8 characters
			if(strlen($_POST['password']) < 8) $error .= "<br /> Your password is too short. In order to be more....secure, we need at least 8 letters";
			
			//If the password does not have a capital letter
			if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br /> Please include atleast one capital letter in your password";
			
			
			}
		//Out print all errors IF ANY were made
		if($error) $error = "<br /> You have made quite a few errors my friend: ".$error;
			//print_r($error);
			//else sign up the user by entering yhem in the database
			else {			
			
			//This else block checks to see whether someone with that email is already in the database
			//Passwords do not have to be unique but email addresses do
			$query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";		
			
			//Sets a variable equal to that query
			$result = mysqli_query($link, $query);
			
			//The results variable will store a number equal the number of items im the database or 0.
			$results = mysqli_num_rows($result);
							
			//If results returns a number besides 0, it means that that email and address has already been registered
			if ($results) $error = "That email address is already registered. Do you want to log in?";
			else {
			
				//
				$query = "INSERT INTO `users` (`age`, `name`, `email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['age'])."', '".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
				
				mysqli_query($link, $query);
								
				//Create a session variable and set it equal to the id of the user that is currently signed in
				$_SESSION['id'] = mysqli_insert_id($link);
				
				//Prints the user's position in the database. In other words, it knows that the user is logged in
				//print_r($_SESSION);
				
				echo "You have been signed up!";
				
				//Redirect to logged in page
				header("Location:home.php");
				
			}
	
		}
	
	//This is for post submit
	
		print_r($error);
	}
	
	
	
	
	//If the user is LOGGING IN
	if($_POST['submit'] == "Log in") {
	
	
	
	
		//If the user is there and has the password they entered
		/**/
		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
	
		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
		
		//If there exists a user with the correct email and password...
		if ($row) {
		
			//Create a session for the logged in user.
			$_SESSION['id'] = $row['id'];
			
			//print_r($_SESSION);
			
			
			
			
			//Redirect to logged in page
			header("Location:home.php");

		
		//Else, if that user does not exist...
		} else {
		
			$error = "We could not find a user with that email and password. Please try again!";
			//Maybe create a password reminder system.
			echo $error;
		
		}
		
	
	}//Ending for post login
	
?>
