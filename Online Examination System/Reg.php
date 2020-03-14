<?php
session_start();
include "connect.php";
			if (isset($_POST['Signup']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$email=$_POST['email'];
				$roll =$_POST['roll'];
				$fullname=$_POST['fullname'];
				$code =$_POST['code'];
				$img_name = $_FILES['imglink']['name'];
				$img_size =$_FILES['imglink']['size'];
			    $img_tmp =$_FILES['imglink']['tmp_name'];

			    $directory = 'upload/';
				$target_file = $directory.$img_name;

					$type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$array=array('jpg','png','jpeg');

					$encrypted_password = md5($password);
					
					$query= "select * from registeration WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}

					
					
					else if($img_size>2097152)
					{
						echo '<script type="text/javascript"> alert("Image file size larger than 2Mb.. Try another image file") </script>';
					}
					else if (file_exists($target_file))
					{	
						echo '<script type="text/javascript"> alert("Image already Exist") </script>';
					}	
					else
					{
							if (!(in_array($type,$array)))
							{
								echo '<script type="text/javascript"> alert("Use proper format of image file") </script>';
							}
	
					
							else
							{
								move_uploaded_file($img_tmp,$target_file);
								$query= "insert into registeration (username,password,fullname,rollno,email,image,code)values('$username','$encrypted_password','$fullname','$roll','$email','$target_file','$code')";
								$query_run = mysqli_query($con,$query);
								
								if($query_run)
								{
									echo '<script type="text/javascript"> alert("You are registered now") </script>';
									header("Location:Register.php");
								}
							
							
							}
					}		
		}	
		 

			 ?>