<!DOCTYPE html>
<?php
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location:index.php');
	}
?>
<html lang = "eng">
	<head>
		<title>Flower's Home</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
	</head>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/home2.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">Welcome to our Home, The Flower's Home !</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<div class = "col-lg-3 well">
				<br />
				<br />
				<h4>Login Here </h4>
				<hr style = "border:1px solid #d3d3d3; width:100%;" />
				<form enctype = "multipart/form-data">
					<div id = "username_warning" class = "form-group">
						<label class = "control-label">Username:</label>
						<input type = "text" class = "form-control" id = "username"/>
					</div>
					<div id = "password_warning" class = "form-group">
						<label class = "control-label">Password:</label>
						<input type = "password" class = "form-control" id = "password"/>
					</div>
					<br />
					<div class = "form-group">
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-save"></span> Login</button>

					</div>
						<?php require_once 'client/login.php'?>
				</form>
				<div id = "result"></div>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
			</div>

			<div class = "col-lg-1"></div>
			<div class = "col-lg-8 well">
				<ul id = "menu">
		<li><a href = "inscr.php"> Don't Have an account yet ? Subscribe To Check Our Spring Collections and More !!</a></li>
	 	</ul>
				<img src = "images/home.png" height = "449px" width = "100%" />
			</div>
		</div>
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right">Saad Dahleb University</label>
			</div>
		</nav>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>
