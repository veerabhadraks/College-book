
<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');

?>
<html>

<body background="wal.png">
<h1><center><font color="white">TELEPHONE DIRECTORY</font></center></h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <CENTER>
        <table border = 1>
				<tr><td><label><font color="yellow">USN/ID:</font></label></td>
				    <td><input type="text"  name="usn" id="USN" placeholder="Enter the USN"></td>
				</tr>
				<tr><td><label><font color="yellow">PASSWORD:</font></label></td>
                    <td><input type="password"  name="passward" placeholder="Enter the password"></td>
			    </tr>
			    <tr><td><button><input type="submit" name="submit" value="SUBMIT" onclick="return true"></button></td></tr>
				<tr><td><button><input type="myadmin" name="myadmin" value="MY ADMIN" onclick="return true"></button></td></tr>
		</table>
				<br><br>
			
				


<?php

$count = 1;
$USN=$PASSWORD="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$USN = $_POST['usn'];
$PASSWORD = $_POST['passward'];
}


//$sql="SELECT * FROM login";
$sql = "SELECT * FROM login WHERE USN like '$USN' AND PASSWORD like'$PASSWORD'";
$result = mysqli_query($db,$sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count == 1) {
  	echo '<script>window.location.href = "http://localhost/sample/index.php"</script>';
    
}
	else {
		echo '<script>alert("INVALID USN OR PASSWORDS")</script>';
	}
?>

</CENTER>
</form>


</body>
</html>