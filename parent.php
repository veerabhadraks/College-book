<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');
?>

<html>
<body>
<h1><center>PARENT DETAILS</center></h1>
<?php

$query = "SELECT * FROM parentdetails";

mysqli_query($db,$query) or die('error');
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
echo "<table border=1>";
echo "<tr><th>USN</th><th>PARENT_NAME</th><th>F_PHONE</th></tr>";
while($row = mysqli_fetch_array($result)) {
	//echo $row['DP_ID'].$row['DP_name'].$row['DP_phone'];
	echo "<tr><th>";
	echo $row['USN'];
	echo "</td><td>";
	echo $row['PARENT_NAME'];
	echo "</td><td>";
	echo $row['F_PHONE'];
	echo "</td></tr>";
	
}

echo "</table>";
?>
</body>
</html>
