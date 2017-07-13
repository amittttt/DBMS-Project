<?php
	include 'database.php';
	$q=mysql_query("select * from account_details");
?>

	<table border="1" width="100%">
    	<tr>
			<th> User Id </th>
            <th> Password </th>
			<th> Action </th>
        </tr>    



<?php
while($arr=mysql_fetch_array($q))
{
	echo '<form action="delete.php">';
	echo '<tr>
	<td>'.$arr["user_id"].'</td>
	<td>'.$arr["password"].'</td>
	<td>
	<input type="hidden" name="uid" value="'.$arr["user_id"].'"/>
	<input type="submit" name="edit" value="Edit" />
	<input type="submit" name="del" value="Delete" />
	</td>
	</tr>';
	echo '</form>';
}
?>

</table>>