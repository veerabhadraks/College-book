<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');
?>

<html>
<body>
<h1><center>TEACHING STAFF DETAILS</center></h1>
<?php

$query = "SELECT * FROM teachingstaff";

mysqli_query($db,$query) or die('error');
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
echo "<table border=1>";
echo "<tr><th>DP_ID</th><th>ID</th><th>NAME</th><th>T_PHONE</th></tr>";
while($row = mysqli_fetch_array($result)) {
	//echo $row['DP_ID'].$row['DP_name'].$row['DP_phone'];
	echo "<tr><th>";
	echo $row['DP_ID'];
	echo "</td><td>";
	echo $row['ID'];
	echo "</td><td>";
	echo $row['NAME'];
	echo "</td><td>";
	echo $row['T_PHONE'];
	echo "</td></tr>";
	
}

echo "</table>";
?>
</body>
</html>
