<?php

require 'connect.php';



if(isset($_POST['username'])&&isset($_POST['password']))

{
$search_name=$_POST['username'];
$password=$_POST['password'];
if(!empty($search_name)&&!empty($password))
{

	

	$query="SELECT * FROM `signup` WHERE `username` ='$search_name' AND `password`='$password'";
	 
	$query_run = mysqli_query($dbcon,$query);
	
	if($query_run)
	
	{	
		
		$query_num_rows=mysqli_num_rows($query_run);
		if($query_num_rows==0)
		{
	
			echo 'invalid';
		
		}
		
	
				else
		{	
		     header ('Location:execute3.php');
		}
	
	

	}else{
	
	
			echo 'error';
	
	}
}
}
??>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body background="C:\Users\sushma ellur\Pictures\CARTOON.jpeg">
<p><h1><strong><center><font color="yellow">TELEPHONE DIRECTORY</font></center>   </h1></strong></button></strong></p>
<div id="login">
	<br><h2> <center><font color="yellow">Welcome to the portal!</font></center></h2></br>
<form action="javascript:void(0);" method="get">
<fieldset>
<div class="bg"> 

<div class="content">
<div class="row">
<h2 style="color:solid-black;"><strong><center><font color="cyan">Login</font></center></strong></h2>
<form action="login.php" method="POST">
				<label for="sname"><center><font color="violet"><h3>USN: </h3></font></label>
				<input type="text"  name="username" id="sname" placeholder="Enter the ID"><br></center><br>
				<label for="semail"><center><font color="yellow"><h3>Password</h3></font></label>
                <input type="password"  name="password" id="semail" placeholder="Enter the password"><br></center><br>
				<center><button><a href="gdfd"></a>Login</button></center>


</div>
</div>
</div>
</form>
</fieldset>
</form>
</p>
</div> <!-- end login -->
</body>
</html>