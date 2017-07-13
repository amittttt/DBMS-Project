<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Registration Form Template</title>

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

    </head>

    <body>
   
	
<?php
		if(isset($_GET["reg"]))
		{
			$con=mysql_connect("localhost","root","");
	if(!$con)
			{
				die("Not connected".mysql_error());
			}
		
		mysql_select_db("project",$con);	
		$q=mysql_query("insert into user_details values('null','".$_GET["fname"]."','".$_GET["lname"]."','".$_GET["uid"]."','".$_GET["pwd"]."','".$_GET["mbl"]."','".$_GET["sq"]."','".$_GET["ans"]."')");
	
		echo '<script>alert("Register Succesfully");</script>';
		}
?>


		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"> Registration </a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Put some text or
							</span> 
							<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-google-plus"></i></a> 
								
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1><strong></strong> Registration Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive registration form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1" href="../startbootstrap-business-casual-1.0.4/index.php">Home</a>
                            	<a class="btn btn-link-2" href="../User_Login.php">Login</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
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
			                    
                                <form role="form" action="#" method="GET" class="registration-form">
                               
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="uid" placeholder="Email..." class="form-email form-control" id="form-email">
			                        </div>
                                    
                                	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Password</label>
			                        	<input type="text" name="pwd" placeholder="Password..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                
                                  	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">Mobile No</label>
			                        	<input type="text" name="mbl" placeholder="Mobile NO..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                    
                                    <div class="form-group">

                                        
                                        <label>Choose a security question</label>
						<select type="text" placeholder="Security Questions" id="input-reg-select" name="sq"  class="form-first-name form-control" >
						<option selected hidden="true" class="security">Security Questions</option>
           				<option class="security">What was your childhood nickname?</option>
           				<option class="security">What is the middle name of your oldest child?</option>
           				<option class="security">What was the last name of your third grade teacher?</option>
           				<option class="security">What is your maternal grandmother's maiden name?</option>
           			
						</Select>
                                        
			                        </div>
                                    
                                    <div class="form-group">
			                    		<label class="sr-only" for="ans">Answer</label>
			                        	<input type="text" name="ans" placeholder="Answer..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                    
                                   
			                       <input type="submit" value="Register" name="reg"/>
			                        
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>