<!DOCTYPE html>
<html lang="en">

<head>
 <?php
 		session_start();
 		$uid=$_SESSION['uid'];
		$con=mysql_connect("localhost","root","");
	if(!$con)
			{
				die("Not connected".mysql_error());
			}
	mysql_select_db("project",$con);	
		$q="select * from user_details where user_id=$uid";
	
		$rs=mysql_query("select * from user_details where user_id=$uid");
		
		if($arr=mysql_fetch_array($rs))
		{

		$fname=$arr["fname"];
		$lname=$arr["lname"];
		$email=$arr["emailid"];
		$mob=$arr["moblieno"];
		
		$GLOBALS['fname']=$fname;
		$GLOBALS['lname']=$lname;
        $GLOBALS['email']=$email;
        $GLOBALS['mob']=$mob;
	
		}
		
		$rs=mysql_query("select * from account_details where user_id=$uid");
		if($arr=mysql_fetch_array($rs))
		{
			
		$account=$arr["acc_type"];
		$GLOBALS['account']=$account;
		$balance=$arr["balance"];
		$GLOBALS['balance']=$balance;
		}
		
	?>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="brand">Secura Bank</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                    
                    </li>
                    <li>
                        <a href="../logout.php">Logout</a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Welcome
                                      <strong><?php echo $fname; ?></strong>
                    </h2>
                    <p class="intro-text text-center"> Name : <?php echo $fname." ".$lname; ?> </p>
                     <p class="intro-text text-center"> Email ID : <?php echo $email; ?> </p>
                      <p class="intro-text text-center"> Mobile NO : <?php echo $mob; ?> </p>
                       <p class="intro-text text-center"> Account no : <?php echo $account; ?> </p>
                      
                    
                    <hr>
                </div>
                <div class="col-md-6">
                   <!--img class="img-responsive img-border-left" src="img/slide-2.jpg" alt=""-->
                </div>
                <div class="col-md-6">
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    
                    <h2 class="intro-text text-center">Transaction Area
                        <strong>:></strong>
                    </h2>
                    <hr>
	
                   <form class="form-horizontal" role="form" method="get">
    <div class="form-group">
      <label class="col-sm-2 control-label">A/c NO (USer):</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" name="acno" type="text" value=" <?php echo $account; ?>" readonly>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">A/c NO(where you want tranfer):</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput"  name="tacno" type="text" value="">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label"> Balance :</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" name="bal" type="text" value="">
      </div>
    </div>
    
  <input type="Submit" name="send" class="btn btn-lg btn-primary btn-block" n id="bt" value="Transfer Money"/>
		</form>
                </div>
                <hr>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
    <?php
	
		if(isset($_GET['send']))
		{
			$acno=$_GET['acno'];
			$tacno=$_GET['tacno'];
			$bal=$_GET['bal'];
		/*	echo "<script>alert(\"$acno\")</script>";
			echo "<script>alert(\"$tacno\")</script>";
			echo "<script>alert(\"$bal\")</script>"; */
			$con=mysql_connect("localhost","root","");
			if(!$con)
				{
					die("Not connected".mysql_error());
				}
			mysql_select_db("project",$con);
		
		
			$q="select balance from account_details where acc_type=".$acno;
			$i=mysql_query($q);
			if($arr=mysql_fetch_array($i))
			{
				ob_start();
				$balance_user=$arr[0];
					if($bal>$balance_user)
					{
						echo '<script>alert("Sorry. You have insufficient funds. Amount cannot be transferred.");</script>';
						break;	
					}	
				$balance_user_update=$balance_user-$bal;
			    $apu=	$balance_user_update;
					$update_user_balance ="update account_details set balance='".$balance_user_update."' where acc_type=".$acno; 	
				$j=mysql_query($update_user_balance);
				$q="select balance from account_details where acc_type=$tacno";
				$i=mysql_query($q);
					if($arr=mysql_fetch_array($i))
					{
						$balance_user=$arr[0];
						$balance_user_update=$balance_user+$bal;
						echo $balance_user_update;
						$update_user_balance ="update account_details set balance='".$balance_user_update."' where 	 	    		acc_type=$tacno"; 	
						$j=mysql_query($update_user_balance);
					}
			}
			echo "<script>alert(\"Current Balance : $apu \");</script>";
		}

?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
    
   
    
    
    
    
    
</body>

</html>
