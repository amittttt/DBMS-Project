<?php
session_start();
	if(isset($_GET["login"]))
	{
		include 'database.php';
		$uid=mysql_real_escape_string($_GET["uid"]);
		$pwd=mysql_real_escape_string($_GET["pwd"]);
		$q=mysql_query("select * from user_details where emailid='".$uid."' and password='".$pwd."'");
			if($arr=mysql_fetch_array($q))
				{
					$_SESSION["uid"]=$uid;
					 
					header ("location:Dashbord.php");
				}
			else
				{
					echo "invalid info";
				}
		
		
	}
?>


