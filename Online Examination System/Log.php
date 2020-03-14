<?php
session_start();
include "connect.php";
	if (isset($_POST['Login']))
			{
				$username = $_POST['user'];
				$password = $_POST['pass'];
				$encrypted_password = md5($password);
				$query="select * from registeration WHERE username='$username' AND password='$encrypted_password'";
			
				$query_run = mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					$row=mysqli_fetch_assoc($query_run);
					$_SESSION['username']= $row['username'];
					$_SESSION['var']=1;
					header('location:Home.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Incorrect Password") </script>';
				}
			}	
?>