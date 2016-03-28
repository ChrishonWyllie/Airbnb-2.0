<?php

	//session_start(); 
	
	
	include("connection.php");
	
	
	//If users is CREATING AN EVENT
	if($_POST['submit'] == "Create Event")  {
	
		if($_POST['eventname']) {
				//
				//$query = "INSERT INTO `event` (`name`, `desc`, `date`) VALUES ('".mysqli_real_escape_string($link, $_POST['eventname'])."' ";

				$query = "INSERT INTO `event` (`name`) VALUES ('".mysqli_real_escape_string($link, $_POST['eventname'])."' ";

				//$query = "INSERT INTO event (name) VALUES ('HELLO') ";

				mysqli_query($link, $query);
				
				
			}
	
		
	
	}
	
	
	
	
	
	
?>


<?php

	session_start();

	//includes the link to the database connection file
	include("connection.php");


	//If users does NOT have an account and is SIGNING UP
	if($_POST['submit'] == "Create Event")  {
	
		//If did not enter name
		if (!($_POST['eventname'])) $error .= "<br /> You have not entered a name. Who are you?!";
	
		//If did not enter email
		if (!($_POST['eventcity'])) $error .= "<br /> You have not entered an email address. We cannot sign you up";
		
		//If did not enter age
		if (!($_POST['eventtime'])) $error .= "<br /> You have not entered your age. ";
		
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
				$query = "INSERT INTO `event` (`name`, `city`, `date`) VALUES ('".mysqli_real_escape_string($link, $_POST['eventname'])."', '".mysqli_real_escape_string($link, $_POST['eventcity'])."', '".mysqli_real_escape_string($link, $_POST['eventtime'])."')";
				
				mysqli_query($link, $query);
								
				//Create a session variable and set it equal to the id of the user that is currently signed in
				$_SESSION['id'] = mysqli_insert_id($link);
				

			}
	
		}
	
	//This is for post submit
	
		print_r($error);
	}
	
	
	
	
?>