<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');
?>

<html>
<body>
<h1><center>NON TEACHING STAFF DETAILS</center></h1>
<?php

$query = "SELECT * FROM nonteaching_staff";

mysqli_query($db,$query) or die('error');
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
echo "<table border=1>";
echo "<tr><th>N_ID</th><th>DP_ID</th><th>N_NAME</th><th>N_PHONE</th></tr>";
while($row = mysqli_fetch_array($result)) {
	//echo $row['DP_ID'].$row['DP_name'].$row['DP_phone'];
	echo "<tr><th>";
	echo $row['N_ID'];
	echo "</td><td>";
	echo $row['DP_ID'];
	echo "</td><td>";
	echo $row['N_NAME'];
	echo "</td><td>";
	echo $row['N_PHONE'];
	echo "</td></tr>";
	
}

echo "</table>";
?>
</body>
</html>
