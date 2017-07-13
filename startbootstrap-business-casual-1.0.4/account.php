<?php
	session_start();
		$uid=$_SESSION['uid'];
	$con=mysql_connect("localhost","root","");
			if(!$con)
				{
					die("Not connected".mysql_error());
				}
			mysql_select_db("project",$con);
	$q="select balance from account_details where user_id=$uid";
	$r=mysql_query($q);
	
		if($arr=mysql_fetch_array($r))
		{
			echo $arr[0];
			
		}


?>