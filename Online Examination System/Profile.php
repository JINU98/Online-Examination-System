<?php
session_start();
include "connect.php";
if($_SESSION['var']!=1)
{
	header("Location:Register.php");
}
else
{
	$username=$_SESSION['username'];
	$query="select * from registeration WHERE username='$username'";
	$result = mysqli_query($con,$query);
	$rows=mysqli_fetch_assoc($result);
}
?>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<style>
  
#hdr
{
	width:100%;
	height:auto;
	background-color:Blue;
	color:white;
	font-size:40px;
	margin-bottom:6px;
}
#img
{
	margin-top:20px;
	margin-left:30px;
	width:20%;
	height:400px;
	background-color:white;
}

#hdr2
{
	font-size:35px;
	color:Red;
	margin-bottom:20px;
}
a{
	text-decoration:none;
	font-size:25px;
	color:Blue;
	font-weight:bold;
}
a:hover
{
	color:red;
}
#bdy
{
	float: right;
	width:70%;
	height:auto;
	margin-top:0px;
	font-size:25px;
	color:black;
	font-weight:bold;
	font-family: 'Merriweather', serif;

}
h3
{
	padding-left:90px;
}
#jinu{
      list-style-type: none;
      font-family: 'Noto Sans KR', sans-serif;
      font-size: 20px;
      display:flex;
      justify-content: center;
      margin-top: 0px;
      padding: 0px 0px;   
      height: 120px;
  }
#a4{
      margin-left: auto;

    }
#a5{
      margin-left: 15px;
      margin-right: 15px;
}
.btn{
      padding-top: 15px;
      margin-top: 15px;
      width:100px;
      height: 55px;
 }
 .card {
 	margin-left: 50px;
   float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: 'Stylish', sans-serif;
}

.title {
  color: grey;
  font-size: 18px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



.button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<div id="jinu" >
     <img src="bg-01.png" style="width: 100px; height:100px;">
    <a href="Home.php"class="btn btn-outline-dark"id="a4">Home</a>
    <a href="index.php"class="btn btn-outline-dark"id="a5">Log out</a> 
</div>

<div id="hdr2">
<center>
Profile
</center>
</div>



<div class="card" style="margin-left: 100px;">
  <img  style="width:100%"src="<?php echo $rows['image'];?>"/>
  <h1> <?php echo $rows['username'];?></h1>
  
</div>

<div id="bdy" style="margin-top: 100px;">

<h3><b>Full Name:</b>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<?php echo $rows['fullname'];?></h3>
<h3><b>Roll Number:</b>&nbsp; &nbsp; &nbsp; &nbsp;<?php echo $rows['rollno'];?></h3>
<h3><b>Branch/Year:</b>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<?php echo $rows['code'];?></h3>
<h3><b>E-mail:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<?php echo $rows['email'];?></h3>
 <br>

</div>
</body>
</html>