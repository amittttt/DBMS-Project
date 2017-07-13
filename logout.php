<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		session_destroy();
	}
	header ("location:startbootstrap-business-casual-1.0.4/index.php");
?>