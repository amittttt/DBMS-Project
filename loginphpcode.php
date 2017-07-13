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
					
					header ("location:userhome.php");
				}
			else
				{
					echo "invalid info";
				}
		
		
	}
?>


<form method="get">
	User ID : <input type="text" name="uid" />
	<br />
	<br />
	Password : <input type="password" name="pwd" />
	<br>
	<br>
	<input type="submit" value="Login" name="login"/>
</form>
