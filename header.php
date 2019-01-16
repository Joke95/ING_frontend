<?php
	$base_url = "localhost";
	$loggedin = true;
?>

<!DOCTYPE html>
<html
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]-->
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<!--[endif]-->

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

 <!-- Own stylesheet -->
<link rel="stylesheet" href="http://<?php echo $base_url;?>/style.css">

<title>ING project H1</title>
</head>


<body>
<header>
	<nav class="navbar navbar-expand-sm bg-light justify-content-left">
		<div class="container">
			<!-- Brand -->
			<span class="logo">
				<a class="navbar-brand" href="#">
					<img src="http://<?php echo $base_url;?>/ING_logo.png" alt="ING logo"> 
				</a>
			</span>
		</div>
	</nav> 
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<img src="http://<?php echo $base_url;?>/Chatbot.png" alt="ING chatbot" class="banner_img"> 
		</div>
	</div>
	<nav class="navbar navbar-expand-sm sticky-top menu">
		<div class="container">	
			

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" href="http://<?php echo $base_url;?>/index.php">Instructions</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://<?php echo $base_url;?>/conversations.php">Conversations</a>
					</li>
					<?php 
						if($loggedin === true):
					?>
						<li class="nav-item">
							<a class="nav-link" href="http://<?php echo $base_url;?>/admin_panel.php">Admin panel</a>
						</li>					
						<li class="nav-item">
							<a class="nav-link" href="http://<?php echo $base_url;?>/import_data.php">Import data</a>
						</li>			
						<li class="nav-item">
							<a class="nav-link" href="#">Log out</a>
						</li>
						
					<?php else: ?>
							
						<li class="nav-item">
							<a class="nav-link" href="http://<?php echo $base_url;?>/login.php">Log in</a>
						</li>
						
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
</header>