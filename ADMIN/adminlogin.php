<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Daily <span>UI</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" name="uid" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="pwd" id="password">
			<br/>
			<button type="submit" name="login">Sign In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</body>

<?php
session_start();
	if(isset($_GET["login"]))
	{
		include 'database.php';
		$uid=mysql_real_escape_string($_GET["uid"]);
		$pwd=mysql_real_escape_string($_GET["pwd"]);
		$q=mysql_query("select * from admin_details where email_id='".$uid."' and password='".$pwd."'");
			if($arr=mysql_fetch_array($q))
				{
					$_SESSION["uid"]=$uid;
					
					header("location:../startbootstrap-business-casual-1.0.4/index.html");
				}
			else
				{
					echo "invalid info";
				}
		
		
	}
?>


<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>