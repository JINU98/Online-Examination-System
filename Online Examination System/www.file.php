<?php
$servername="localhost";
$username="root";
$password="";
$dbname="website";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$result="";
if(isset($_POST['submit']))
{
	$file=$_FILES['file'];
	$name=$_FILES['file']['name'];
	$error=$_FILES['file']['error'];
	$size=$_FILES['file']['size'];
	$temp_name=$_FILES['file']['tmp_name'];
	$directory="upload/".$name;
	//$var=end((explode('.',$directory)));
	$type=strtolower(pathinfo($directory,PATHINFO_EXTENSION));
	$array=array('png','jpg','jpeg');
	if (!(in_array($type,$array)))
		$result="Not supported this kind of file";
	else if (file_exists($directory))
		$result="File already exist";
	else if($size>5000000)
		$result="File is too large";
	else	
		move_uploaded_file($temp_name,$directory);
}
?>
<html>
<head>
<title>
Upload
</title>
<style>
div
{
	width:450px;
	height:300px;
	background-color:orange;
	margin-left:430px;
	margin-top:200px;
	box-shadow:5px 5px 5px 5px black;
}
input
{
	font-size:20px;
	margin-top:40px;
	margin-left:20px;
	color:red;
	background-color:pink;
}
p
{
	font-size:30px;
	color:blue;
	margin-left:50px;
}
</style>
</head>
<body>
<div>
<form action="" name="form" enctype="multipart/form-data" method="POST">
<input type="file" name="file" required><br>
<input type="submit" name="submit">
</form>
<p>
<?php
echo $result;
?>
</p>
</div>
</body>
</html>