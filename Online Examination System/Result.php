<?php
session_start();
include 'connect.php';
if($_SESSION['var']!=1)
{
	header("Location:Register.php");
}

$servername="localhost";
$username="root";
$password="";
$dbname="project";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$CA=0;
$WA=0;
$NA=0;
$count=1;
	$username=$_SESSION['username'];
	$query="select * from registeration WHERE username='$username'";
	$result=mysqli_query($con,$query);
	$row1=mysqli_fetch_array($result);
while($count<=10)
{
	$sql="select $username,A_Aid from acn where id='$count'";
	$result=mysqli_query($con,$sql);
	$rows=mysqli_fetch_array($result);
	if ($rows[$username]==$rows['A_Aid'])
	{
		$CA=$CA+1;
		$count=$count+1;
	}
	elseif($rows[$username]==NULL||$rows[$username]==5)
	{
		$NA=$NA+1;
		$count=$count+1;
	}
	else
	{
		$WA=$WA+1;
		$count=$count+1;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESULT</title>
<style type="text/css">

	.container{
		height=80%;
		width=60%;
		margin-left: 35%;
		margin-top:5%;
		position: absolute;
	}
	img{
		padding-left: 0px;

	}
	#q{
		margin-top:30%; 
		margin-left: 25%;
		position: absolute;
		border-bottom: 2px solid black;
		
		
		 }
	p{
		padding-left: 40%;

	}
	thead{
		background-color: #ffc107;
	}
	img{
		
		margin-right: 20px;
	}
	h1{
		margin-left: 45%;

	}
	#footer{
		margin-top: 41%;
	}
	body{
		border:2px solid black;
	}
	
</style>
</head>
<body>
<h1>RESULT</h1>
	<div class= container>
	<table>
		<tbody>
			<tr>
				<td>
					<img src="<?php echo $row1['image'];?>" height="270px"; width="260px";>
				</td>
				<td><h3>Username: <?php echo $row1['username'];?></h3>
					<br>
					<h3>Roll No.<?php echo $row1['rollno'];?></h3>
				</td>
				</tbody>
			</tr>
			</table>
		</div>

			
<table  width="50%" id="q">
			<thead>
				<tr>
					<th><h3>Total no. of question:</h3></th>
					<th><h3>correct</h3></th>
					<th><h3>wrong</h3></th>
					<th>Not-attempted</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><p><?php echo $CA+$WA+$NA;?></p></td>
					<td><p><?php echo $CA;?></p></td>
					<td><p><?php echo $WA;?></p></td>
					<td><p><?php echo $NA;?></p></td>
				</tr>
			</tbody>

</table>
	<h1 id="footer">Total Score : <?php echo $CA*4?><?php echo -$WA;?><?php echo "="?><?php echo $CA*4-$WA;?></h1>
</body>
</html>