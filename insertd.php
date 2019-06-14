<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');

?>
<html>
<body>
<h1><center><font color="black">INSERTION OF DEPARTMENT</font></center></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
	<CENTER>
		<table border = 1>
				<tr><td><label><font color="black">DP_ID:</font></label></td>
				    <td><input type="text"  name="DP_ID" id="DP_ID" placeholder="Enter the DP_ID"></td>
				</tr>
				<tr><td><label><font color="black">DP_NAME:</font></label></td>
                    <td><input type="DP_NAME"  name="DP_NAME" placeholder="Enter the DP_NAME"></td>
			    </tr>
				<tr><td><label><font color="black">DP_PHONE:</font></label></td>
                    <td><input type="DP_PHONE"  name="DP_PHONE" placeholder="Enter the DP_PHONE"></td>
			    </tr>
			    <tr><td><button><input type="submit" name="submit" value="SUBMIT" onclick="return true"></button></td></tr>
		</table>
		
				<br><br>
<?php
 $DP_ID=$DP_NAME=$DP_PHONE="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
$DP_ID = $_POST['DP_ID'];
$DP_NAME = $_POST['DP_NAME'];
$DP_PHONE = $_POST['DP_PHONE'];
}
$sql = "INSERT INTO department(DP_ID,DP_NAME,DP_PHONE)VALUES('$DP_ID','$DP_NAME','$DP_PHONE')";
$result=mysqli_query($db,$sql);
if($result)
{
	echo "Successfully updated database";
}
else
{
	$ERROR= "unsuccessful";
}

?>
	</CENTER>
	</form>
</body>
</html>
	
