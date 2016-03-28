<?php

	session_start();
	
	include("connection.php");
	include("createevent.php");
	
	
	
	
	
	$namequery = "SELECT * FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $namequery);
	
	$row = mysqli_fetch_array($result);
	
	$name = $row['name'];



	$eventquery = "SELECT * FROM event";
	
	if($result = mysqli_query($link, $eventquery)) {

	while ($row = mysqli_fetch_array($result)) {
	
	$namerow .= $row['name'].'<br />';
	$cityrow .= $row['city'].'<br />';
	$daterow .= $row['date'].'<br />';
	$idrow .= "000".$row['id'].'<br />';
	//$button .= '<input class="button" type="submit" value="'.$idrow .'"/>';
	$button .= $row['id'].'<br />';

	
	
	$_GET[$idrow];
	
		
	


		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
	<meta name ="viewport" content ="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"> 
		<link rel ="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
		<script src="jquery.js"></script>
		
		<style>
			.main{
				background-color: white;
				}
			.button{
				height: 25px;
			}
			
		
		
		</style>
	
	</head>
	
	<body>
		<div class="main">
		
			<div class="container">
			<div class="jumbotron">
			<a href ="index.php">LOG OUT</a>
			</div>
			
			<br />
			<br />
			
			
			
			<div class="jumbotron">
			<h1>Welcome!<u> <?php echo $name; ?> </u>Please look through the list of events</h1>
		
		

		
			<p><i>These are placeholders texts for now</i></p>
	
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<p><?php echo $namerow; ?></p>
					
					</div>
			
					<div class="col-md-2">
						<p><?php echo $cityrow; ?></p>
					</div>
				
					<div class="col-md-2">
						<p><?php echo $idrow; ?></p>
					</div>	
					
					<div class="col-md-2">
						<p><?php echo $daterow; ?></p>
					</div>
					
					<div class="col-md-2">
						<p><a href="showevents.php"><?php echo $button; ?></a></p>
					</div>
				</div>
			</div>
			
			
			
			
			
		</div>
		
		<div class="jumbotron">
		
		<a class="btn btn-success pull-right "href="registerevent.php">CREATE EVENT</a>


		</div><!--Ending div for this jumbo-->

		
		

		
		</div><!--Ending of div main-->
	
	
	<!--
	<form method="post">
	
		<label for ="eventname" class="col-lg-6 control-label">Name</label>
		<input type="text" name="eventname" id="eventname" />
		
		<label for ="eventcity" class="col-lg-6 control-label">city</label>
		<input type="text" name="eventcity" id="eventcity" />
		
		<label for ="eventtime" class="col-lg-6 control-label">Name</label>
		<input type="text" name="eventtime" id="eventtime" />
		
		<input type="submit" name= "submit" class="btn btn-success pull-right" value="Create Event" />

	
	</form>
	-->
	
	
	<a href="registerevent.php"><CREATE EVENT</a>
		
	
	
		
		<script src="main.js"></script>
		<script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
		
		
		
		
		<!--
		
		<button onclick="createDiv()">Try it</button>

<script>
function createDiv() {
    var div = document.createElement("div");
    var t = document.createTextNode("This is a paragraph too.");
    div.appendChild(t);
    document.body.appendChild(div);
}


</script>

		-->



	</body>
</html>