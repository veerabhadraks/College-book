<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');
?>

<html>
<body>
<h1><center><font color = "red">DEPARTMENT DETAILS</font></center></h1>
<?php

$query = "SELECT * FROM department";

mysqli_query($db,$query) or die('error');
$result=mysqli_query($db,$query);
echo "<center><br><br>";
echo "<table border=1 cellspacing=0 cellpadding=1>";
echo "<tr><th>DP_ID</th><th>DP_name</th><th>DP_phone</th></tr>";
while($row = mysqli_fetch_array($result)) {
	
	echo "<tr><td>";
	echo $row['DP_ID'];
	echo "</td><td>";
	echo $row['DP_name'];
	echo "</td><td>";
	echo $row['DP_phone'];
	echo "</td><tr>";
	
}

echo "</table>";
echo "</center>";
?>
</body>
</html>
