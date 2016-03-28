<?php

	session_start();

	//includes the link to the database connection file
	include("connection.php");
	
	include("login.php");
	
	$emailquery="SELECT email FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $emailquery);
	
	$row = mysqli_fetch_array($result);
	
	$email = $row['email'];

	
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Convention Connection Registration</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

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
        <meta name ="viewport" content ="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"> 
		<link rel ="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="jquery.js"></script>
		
		<style>
			body{
			background-image: url("https://i.ytimg.com/vi/japZUai8jAk/maxresdefault.jpg");
			color: white;
			
		}
		</style>
		

    </head>

    <body id="registration_index">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Convention Connection Login &amp; Registration Page</strong></h1>
                            <div class="description">
                            	<p><strong>
	                            	This is a service that connects people attending the same event with housing options. They share housing with people that have already secured housing thereby reducing the cost of accommodation and eliminating the inconvenience of living with people with whom they have nothing in common.<strong>
								</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to Convention Connection</h3>
	                            		<p>Enter email and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="loginemail">email</label>
				                        	<input type="text" name="loginemail" placeholder="Email@email.com..." class="loginemail form-control" id="loginemail">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="loginpassword">Password</label>
				                        	<input type="password" name="loginpassword" placeholder="Password..." class="loginpassword form-control" id="loginpassword">
				                        </div>
				                        <input type="submit" class="btn btn-info" name="submit" value="Log in" />

				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="name"> name</label>
				                        	<input type="text" name="name" placeholder="Full Name..." class="name form-control" id="name">
				                        </div>
				                        
				                        <div class="form-group">
				                        	<label class="sr-only" for="email">Email</label>
				                        	<input type="email" name="email" placeholder="Email..." class="email form-control" id="email">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="password form-control" id="password">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="age">Age</label>
				                        	<input type="text" name="age" placeholder="Age..." class="age form-control" id="age">
				                        </div>
										<input type="submit"  class="btn btn-info" name="submit" value="Sign up" />
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