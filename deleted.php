<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');

?>
<html>
<body>
<h1><center><font color="black">DELETION OF ROW IN DEPARTMENT</font></center></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
	<CENTER>
		<table border = 1>
				<tr><td><label><font color="black">DP_ID:</font></label></td>
				    <td><input type="text"  name="DP_ID" id="DP_ID" placeholder="Enter the DP_ID"></td>
				</tr>
				<tr><td><button><input type="submit" name="submit" value="SUBMIT" onclick="return true"></button></td></tr>
		</table>
		
				<br><br>
<?php
 $DP_ID="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
$DP_ID = $_POST['DP_ID'];
}
$sql = "DELETE FROM department WHERE DP_ID LIKE '$DP_ID'";
$result=mysqli_query($db,$sql);
if($result)
{
	echo "Successfully updated database";
}
else
{
	$error= "unsuccessful";
}

?>
	</CENTER>
	</form>
</body>
</html>
	
