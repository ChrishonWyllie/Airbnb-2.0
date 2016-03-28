<?php

	session_start();

	//includes the link to the database connection file
	include("connection.php");


	//If users does NOT have an account and is SIGNING UP
	if($_POST['submit'] == "Create Listing")  {
	
		//If did not enter name
		if (!($_POST['form-first-name'])) $error .= "<br /> You have not entered a name. Who are you?!";
	
		//If did not enter email
		if (!($_POST['form-last-name'])) $error .= "<br /> You have not entered a last name";
		
		//If did not enter age
		if (!($_POST['form-email'])) $error .= "<br /> You have not entered your email. ";
		
		if (!($_POST['form-phone'])) $error .= "<br /> You have not entered your phone. ";


		if (!($_POST['form-address'])) $error .= "<br /> You have not entered your address. ";

		if (!($_POST['form-choice'])) $error .= "<br /> You have not entered your choice. ";

		//Out print all errors IF ANY were made
		if($error) $error = "<br /> You have made quite a few errors my friend: ".$error;
			//print_r($error);
			//else sign up the user by entering yhem in the database
			else {			
			
			//This else block checks to see whether someone with that email is already in the database
			//Passwords do not have to be unique but email addresses do
			$query="SELECT * FROM `attendees` WHERE email='".mysqli_real_escape_string($link, $_POST['name'])."'";		
			
			//Sets a variable equal to that query
			$result = mysqli_query($link, $query);
			
			//The results variable will store a number equal the number of items im the database or 0.
			$results = mysqli_num_rows($result);
							
			//If results returns a number besides 0, it means that that email and address has already been registered
			if ($results) $error = "That name is already registered. Do you want to log in?";
			else {
			
				//
				$query = "INSERT INTO `attendees` (`firstname`, `lastname`, `phone`, `email`, `address`, `LorS`) VALUES ('".mysqli_real_escape_string($link, $_POST['form-first-name'])."', '".mysqli_real_escape_string($link, $_POST['form-last-name'])."', '".mysqli_real_escape_string($link, $_POST['form-email'])."', '".mysqli_real_escape_string($link, $_POST['form-phone'])."', '".mysqli_real_escape_string($link, $_POST['form-address'])."', '".mysqli_real_escape_string($link, $_POST['form-choice'])."')";
				
				mysqli_query($link, $query);
								
				//Create a session variable and set it equal to the id of the user that is currently signed in
				$_SESSION['id'] = mysqli_insert_id($link);
				

			}
	
		}
	
	//This is for post submit
	
		print_r($error);
	}
	
	
	
	
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Event Registration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
		 <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"> 
		<link rel ="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="jquery.js"></script>
		

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

		<style>
		body{
        	    background-image: url("https://upload.wikimedia.org/wikipedia/commons/f/fb/Back_Bay_and_Charles_River,_Boston,_MA.jpg" );
        	}
        </style>
        
    </head>

    <<body id="event_registration_index">>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Create your Listing!</strong></h1>
                            <div class="description">
                            	<p><strong>
	                            Make sure to include pictures and interesting features of your event to remind attendees of reasons they do not want to miss this event.</strong>
								</p>
							</div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Add your personal information below:</h3>
	                            		
									</div>
	                        		
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="person-listing-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First Name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-last-name">Last Name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-phone">Phone Number</label>
				                        	<input type="text" name="form-phone" placeholder="Phone Number..." class="form-phone form-control" id="form-phone">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-address">Address</label>
				                        	<input type="text" name="form-address" placeholder="Address..." class="form-address form-control" id="form-address">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="form-description">Description</label>
				                        	<input type="text" name="form-description" placeholder="Description..." class="form-description form-control" id="form-description">
				                        </div>	
				                        
				                        <div class="form-group">
				                    		<label class="sr-only" for="form-choice">Choice</label>
				                        	<input type="text" name="form-choice" placeholder="Looking or Sharing?..." class="form-choice form-control" id="form-choice">
				                        </div>							
										
										<div class="form-group">
											<input type="submit" name= "submit" class="btn btn-danger pull-right" value="Create Listing" />
											<a class="pull-right btn btn-info" href="showevents.php">GO BACK TO EVENTS PAGE!</a>

										</div>
										<div class="form-group">
	                        			<label class="control-label">Upload Picture</label>
										<input id="picture" name="input2[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
										</div>
				                        
				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Copyright RealQuik (c) 2016</p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="main.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
		
		
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>