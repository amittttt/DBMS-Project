<?php
	$con=mysql_connect("localhost","root","");
	if(!$con)
			{
				die("Not connected".mysql_error());
			}
	mysql_select_db("project",$con);
		
		?>