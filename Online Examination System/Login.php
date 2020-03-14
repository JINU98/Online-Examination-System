<?php
session_start();
include "connect.php";
	if (isset($_POST['Login']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$encrypted_password = md5($password);
				$query="select * from registeration WHERE username='$username' AND password='$encrypted_password'";
			
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					$row=mysqli_fetch_assoc($query_run);
					$_SESSION['username']= $row['username'];
					header('location:Home.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Incorrect Password") </script>';
				}
			}	
?>
<html>
<head>
<title>Login</title>
<style>
body
{
	background-color:#F0FFF0;
}
#hdr
{
	width:100%;
	height:auto;
	background-color:Blue;
	color:white;
	font-size:40px;
	margin-bottom:6px;
}

#fh
{
	width:100%;
	margin-top:20px;
}
img
{
	width:16%;
	height:160px;
}
#sh
{
	margin-top:30px;
}

input
{
	font-size:25px;
	margin:5px;
	height:45px;
	border:3px solid red;
	text-align:center;
	border-radius:15px;
}
a
{
	text-decoration:none;
	color:Red;
}
#p
{
	font-weight:bold;
	font-size:25px;
}

a:hover
{
	color:blue;
	font-size:35px;
}
</style>
</head>
<body>

<div id="hdr">
<center>
International Institute of Information Technology,Naya Raipur
</center>
</div>

<div id="fh">
<center>
<img src="bg-01.png">
</center>
</div>

<div id="sh">
<center>
<h1 style="color:blue">Login</h1>
<form method="POST" action="">
<p><input type="text"placeholder="Username"name="username" required></input></p>
<p><input type="password"placeholder="Password" name="password"required ></input></p>
<p><input type="submit" value="Login"name="Login"></input>
<p id="p">Not Registered yet ? <a href="Register.php">Sign up</a></P>
</form>
</center>

</div>
<script>

</script>
</body>
</html>