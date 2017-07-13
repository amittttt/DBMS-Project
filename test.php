<form method="post">

<input type="text" name="acno"/>
<br />
<br />
<br />
<input type="text" name="tacno"/>
<br />
<br />
<br />

<input type="text" name="bal"/>
<br />
<br />
<br />

<input type="submit" name="send" value="tRANSFER"  />

</form>
<?php
	
	if(isset($_POST['send']))
	{
		
		$acno=$_POST['acno'];
		$tacno=$_POST['tacno'];
		$bal=$_POST['bal'];
		$con=mysql_connect("localhost","root","");
	if(!$con)
			{
				die("Not connected".mysql_error());
			}
	mysql_select_db("project",$con);
	
	
	$q="select balance from account_details where acc_type='".$acno."'";
	$i=mysql_query($q);
	if($arr=mysql_fetch_array($i))
	{
		$balance_user=$arr[0];
		if($bal>$balance_user)
		{
			echo 'Sorry You have not sufficient ammount to transfer.';
		
			break;	
		}
		$check ="select acc_type from account_details"; 	
		$a=mysql_query($check);
		
	
		$balance_user_update=$balance_user-$bal;
		echo $balance_user_update;
	$update_user_balance ="update account_details set balance='".$balance_user_update."' where acc_type='".$acno."'"; 	
	$j=mysql_query($update_user_balance);
	
	$q="select balance from account_details where acc_type='".$tacno."'";
	$i=mysql_query($q);
	if($arr=mysql_fetch_array($i))
	{
		$balance_user=$arr[0];
		$balance_user_update=$balance_user+$bal;
		echo $balance_user_update;
	$update_user_balance ="update account_details set balance='".$balance_user_update."' where acc_type='".$tacno."'"; 	
	$j=mysql_query($update_user_balance);
	}
	
	}
	header("location:test.php");
	}
?>
