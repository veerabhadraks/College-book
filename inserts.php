<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');

?>
<html>
<body>
<h1><center><font color="black">INSERTION OF STUDENT DETAILS</font></center></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
	<CENTER>
		<table border = 1>
				<tr><td><label><font color="black">STUDENT_NAME:</font></label></td>
				    <td><input type="text"  name="STUDENT_NAME" id="STUDENT_NAME" placeholder="Enter the STUDENT NAME"></td>
				</tr>
				<tr><td><label><font color="black">DP_ID:</font></label></td>
                    <td><input type="text"  name="DP_ID" placeholder="Enter the DP_ID"></td>
			    </tr>
				<tr><td><label><font color="black">USN:</font></label></td>
                    <td><input type="text"  name="USN" placeholder="Enter the USN"></td>
			    </tr>
				<tr><td><label><font color="black">PHONE :</font></label></td>
                    <td><input type="text"  name="PHONE" placeholder="Enter the PHONE"></td>
			    </tr>
				<tr><td><label><font color="black">EMAIL:</font></label></td>
                    <td><input type="text"  name="EMAIL" placeholder="Enter the EMAIL"></td>
			    </tr>
			    <tr><td><button><input type="submit" name="submit" value="SUBMIT" onclick="return true"></button></td></tr>
		</table>
		
				<br><br>
<?php
 $STUDENT_NAME=$DP_ID=$USN=$PHONE=$EMAIL="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
$STUDENT_NAME = $_POST['STUDENT_NAME'];
$DP_ID= $_POST['DP_ID'];
$USN = $_POST['USN'];
$PHONE = $_POST['PHONE'];
$EMAIL = $_POST['EMAIL'];
}
$sql = "INSERT INTO studentdetails(STUDENT_NAME,DP_ID,USN,PHONE,EMAIL)VALUES('$STUDENT_NAME',$DP_ID','$USN','$PHONE','$EMAIL')";
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
	