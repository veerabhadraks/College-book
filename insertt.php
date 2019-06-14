<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');

?>
<html>
<body>
<h1><center><font color="black">INSERTION OF TEACHING STAFF DETAILS</font></center></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
	<CENTER>
		<table border = 1>
				<tr><td><label><font color="black">ID:</font></label></td>
				    <td><input type="text"  name="ID" id="ID" placeholder="Enter the ID"></td>
				</tr>
				<tr><td><label><font color="black">NAME:</font></label></td>
                    <td><input type="text"  name="NAME" placeholder="Enter the NAME"></td>
			    </tr>
				<tr><td><label><font color="black">DP_ID:</font></label></td>
                    <td><input type="text"  name="DP_ID" placeholder="Enter the DP_ID"></td>
			    </tr>
				<tr><td><label><font color="black">T_PHONE:</font></label></td>
                    <td><input type="text"  name="T_PHONE" placeholder="Enter the PHONE"></td>
			    </tr>
			    <tr><td><button><input type="submit" name="submit" value="SUBMIT" onclick="return true"></button></td></tr>
		</table>
		
				<br><br>
<?php
 $ID=$NAME=$DP_ID=$T_PHONE="";
if($_SERVER["REQUEST_METHOD"]=="POST") {
$ID = $_POST['ID'];
$NAME = $_POST['NAME'];
$DP_ID= $_POST['DP_ID'];
$T_PHONE= $_POST['T_PHONE'];
}
$sql = "INSERT INTO teachingstaff(ID,NAME,DP_ID,T_PHONE)VALUES('$ID','$NAME','$DP_ID','$T_PHONE')";
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
	