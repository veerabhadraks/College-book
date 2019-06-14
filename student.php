<?php
$db=mysqli_connect('localhost','root','123','telephone') or die('error');
?>

<html>
<body>
<h1><center>STUDENT DETAILS</center></h1>
<?php

$query = "SELECT * FROM studentdetails";

mysqli_query($db,$query) or die('error');
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result);
echo "<table border=1>";
echo "<tr><th>USN</th><th>STUDENT_NAME</th><th>DP_ID</th><th>EMAIL</th><th>PHONE</th></tr>";
while($row = mysqli_fetch_array($result)) {
	//echo $row['DP_ID'].$row['DP_name'].$row['DP_phone'];
	echo "<tr><th>";
	echo $row['USN'];
	echo "</td><td>";
	echo $row['STUDENT_NAME'];
	echo "</td><td>";
	echo $row['DP_ID'];
	echo "</td><td>";
	echo $row['EMAIL'];
	echo "</td><td>";
	echo $row['PHONE'];
	echo "</td></tr>";
	
}

echo "</table>";
?>
</body>
</html>
