<?php

	include("connection.php");
	include("createevent.php");


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
        	    background-image: url("https://www.dimock.org/wp-content/uploads/2014/08/boston.jpg" );
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
                            <h1><strong>Create your event!</strong></h1>
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
	                        			<h3>Add your event information below:</h3>
	                            		
									</div>
	                        		
	                            </div>
	                            
	                            
	
	<form method="post">
	
		<label for ="eventname" class="col-lg-6 control-label">Name</label>
		<input type="text" name="eventname" id="eventname" />
		
		<label for ="eventcity" class="col-lg-6 control-label">city</label>
		<input type="text" name="eventcity" id="eventcity" />
		
		<label for ="eventtime" class="col-lg-6 control-label">Name</label>
		<input type="text" name="eventtime" id="eventtime" />
		
		<input type="submit" name= "submit" class="btn btn-success pull-right" value="Create Event" />

	
	</form>
			<a class="btn btn-info" href="home.php">GO BACK TO EVENTS PAGE!</a>

	                            
	                        <!--    
	                            
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="event-registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="eventname">Event Name</label>
				                        	<input type="text" name="eventname" placeholder="Event name..." class="form-event-name form-control" id="eventname">
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="eventcity">Event City</label>
				                        	<input type="text" name="eventcity" placeholder="Event city..." class="form-event-date form-control" id="eventcity">
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="eventtime">Time fo the event</label>
				                        	<textarea name="eventtime" placeholder="Event time..." class="form-event-description form-control" id="eventtime"></textarea>
				                        </div>
										<div class="form-group">
	                        			<label class="control-label">Upload Picture</label>
										<input id="picture" name="input2[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
										</div>
				                        
				                    </form>
			                    </div>
		                    </div>
		                -->
		                	
	                        
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