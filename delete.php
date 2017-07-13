

<?php
//Delete the data in the data_base
$u=$_REQUEST["uid"];
include "database.php";
if(isset($_REQUEST["del"]))
{
	mysql_query("delete from user_master where user_id='".$u."'");

header("location:editdata.php");
}
?>


<?php
	//edit database
	$q=mysql_query("select * from user_master where user_id='".$u."'");
	if($arr=mysql_fetch_array($q))
	{
	echo '
	<form method="post">
	UID : <input type="text" name="uid"	value="'.$arr["user_id"].'"/>
	<br>
	UID : <input type="text" name="pwd"	value="'.$arr["password"].'"/>
	<br>
	<input type="submit" value="update" name="upd"/>
	</form>
	';
	}
	if(isset($_REQUEST["upd"]))
	{
		$uid=$_REQUEST["uid"];
		$pwd=$_REQUEST["pwd"];
		$q=mysql_query("update user_master set password='".$pwd."' where user_id='".$uid."'");
		if($q)
		{
			header ("location:editdata.php");
		}
	}
?>
