<?php

	session_start();
	
	include("connection.php");
	include("createevent.php");
	
	/*
	$namequery = "SELECT * FROM attendees";
	
	$result = mysqli_query($link, $namequery);
	
	$row = mysqli_fetch_array($result);
	
	$name = $row['name'];
*/


	$eventquery = "SELECT * FROM attendees WHERE LorS ='Sharing'";
	
	if($result = mysqli_query($link, $eventquery)) {

	while ($row = mysqli_fetch_array($result)) {
	
	$namerow .= $row['firstname'].'<br />';
	$phonerow .= $row['phone'].'<br />';
	$cityrow .= $row['address'].'<br />';
	$choicerow .= $row['LorS'].'<br />';
	
	}
	}
	
	
	$eventquery1 = "SELECT * FROM attendees WHERE LorS='Looking' ";
	
	if($result = mysqli_query($link, $eventquery1)) {

	while ($row = mysqli_fetch_array($result)) {
	
	$namerow1 .= $row['firstname'].'<br />';
	$phonerow1 .= $row['phone'].'<br />';
	$cityrow1 .= $row['address'].'<br />';
	$choicerow1 .= $row['LorS'].'<br />';
	

	
	/*$daterow .= $row['date'].'<br />';
	$idrow .= "000".$row['id'].'<br />';
	//$button .= '<input class="button" type="submit" value="'.$idrow .'"/>';
	$button .= $row['id'].'<br />';

	
	
	$_GET[$idrow];
	
		*/
	


		}
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

    </head>

    <<body id="display_index">>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                           
                    <div class="row">
                        <div class="col-sm-12">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class = "form-top">
										<div class = "col-sm-6 col-md-3 col-md-offset-10">
											
										</div>
	                        			<h1>Boston's Finest Hackathon</h1>
										<h1>03/26/2016</h1>
										<h1>415 Summer Street, Boston MA</h1>
	                            	<div/>
								</div>
								<div class = "row">
									<p>"This is alot of information we are sharing with you about out event. Make sure you show up.
									This is alot of information we are sharing with you about out event. Make sure you show up.
									This is alot of information we are sharing with you about out event. Make sure you show up.
									This is alot of information we are sharing with you about out event. Make sure you show up."</p>
								</div>
								<div class="container">
								<div class = "row">
									<div class = "col-md-3">
										<a href = "#" class = "thumbnail">
										<img src = "https://www.dimock.org/wp-content/uploads/2014/08/boston.jpg" alt = "Generic placeholder thumbnail">
										</a>
									</div>
									<div class = "col-md-3">
										<a href = "#" class = "thumbnail">
										<img src = "https://www.dimock.org/wp-content/uploads/2014/08/boston.jpg" alt = "Generic placeholder thumbnail">
										</a>
									</div>
									<div class = "col-md-3">
										<a href = "#" class = "thumbnail">
										<img src = "https://www.dimock.org/wp-content/uploads/2014/08/boston.jpg" alt = "Generic placeholder thumbnail">
										</a>
									</div>
									<div class = "col-md-3">
										<a href = "#" class = "thumbnail">
										<img src = "https://www.dimock.org/wp-content/uploads/2014/08/boston.jpg" alt = "Generic placeholder thumbnail">
										</a>
								</div>
								</div>
	                           
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        
                    </div>
					<div class = "col-md-11">
						<div class = "row">
							<h4>Attendees Offering Space</h4>
							<div class = "row">
								<div class = "col-md-3">
									<p><?php echo $namerow; ?></p>
								</div>
								
								<div class="col-md-3">
									<p><?php echo $phonerow; ?></p>
								</div>
								
								<div class="col-md-3">
									<p><?php echo $cityrow; ?><p/>
								</div> 
								
								<div class="col-md-3">
									<p><?php echo $choicerow; ?><p/>
								</div> 
								
								
							</div>
							<div class="col-sm-6 col-sm-offset-10">
								<a href="eventlisting.php" class="btn btn-primary">Share Space</a>
							</div>
							
						</div>
						
						
						<br />
						<br />
						<br />
						<br />
						<div class = "row"; margin-left: 10%;>
							<h4>Attendees Seeking Space</h4>
							<div class = "row">
							
							<div class = "col-md-3">
									<p><?php echo $namerow1; ?></p>
								</div>
								
								<div class="col-md-3">
									<p><?php echo $phonerow1; ?></p>
								</div>
								
								<div class="col-md-3">
									<p><?php echo $cityrow1; ?><p/>
								</div> 
								
								<div class="col-md-3">
									<p><?php echo $choicerow1; ?><p/>
								</div>
								
							</div>
							
							
								<div class = "col-sm-6 col-md-3 col-md-offset-10">
									<a href="eventlisting.php" class="btn btn-primary">Look for Space</a>
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