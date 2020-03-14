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

	$var=1;
	if(isset($_GET['Number']))
	{
		$var=$_GET['Number'];
	}
	$sql="select * from dq where Q_id='$var'";
	$result1=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result1);
	if(isset($_POST['Save']))
	{
		$ans=$_POST['rd'];
		$sql="update adq set $username='$ans' where Q_id='$var' ";
		mysqli_query($con,$sql);
	}
}
?>
<html>
<head>
<title>Quiz</title>
<style>
body
{
	margin:5px;
	background-color:#F0FFF0;
}
#Ist
{
	width:100%;
	height:auto;
	background-color:Blue;
	color:white;
	font-size:40px;
	margin-bottom:6px;
}

#IInd
{
	width:70%;
	height:465;
	border:3px solid black;
	margin-bottom:0px;
	float:right;
	margin-top:-560px;
	margin-right:10px;
	overflow:auto;
	background-color:#FFFFF0
}

#IIIrd
{
	width:70%;
	background-color:;
	border:3px solid black;
	margin-right:10px;
	margin-top:-63px;
	float:right;
	height:auto;
}
#IVth
{
	width:24%;
	height:535px;
	border:3px solid black;
	box-shadow:0px 0px 0px 0px black;
	background-color:00ffff;
}
#dv12
{
	width:50%;
	font-weight:bold;
	float:right;
	margin-top:-90px;
	color:blue;
	
}
#dv11
{
	width:45%;
	height:120px;
	margin:2px;
}

#dv2
{
	width:80%;
	height:200px;
	overflow:auto;
	margin-top:25px;
}
#dv3
{
	margin-top:20px;
	color:black;
	height:150px;
	font-weight:bold;
	overflow:auto;
}
img
{
	width:100%;
	height:120px;;
}

button
{
	background-color:white;
	width:45px;
	height:35px;
	margin:10px;
}	
#btn1
{
	background-color:green;
	width:20px;
	height:20px;
}
#btn2
{
	background-color:red;
	width:20px;
	height:20px;
}
#btn3
{
	background-color:blue;
	width:20px;
	height:20px;
}
#btn4
{
	background-color:white;
	width:20px;
	height:20px;
}
.btn
{
	margin:5px;
}
.bt
{
	width:auto;
	color:blue;
	font-weight:bold;
	margin-right:40px;
	font-size:17px;
	border:1px solid black;
	background-color:00ff00;
}
input
{
	width:20px;
	height:20px;
}

.op
{
	font-size:30px;
	margin-left:10px;
}
#qs
{
	font-size:30px;
	margin:20px;
}

#sbmt
{
	height:35px;
	width:90px;
}
</style>

</head>

<body>
<div id="Ist">
<center>
International Institute of Information Technology,Naya Raipur
</center>
</div>


<div id="IVth">


<div id="dv11"class="dv1">
<img src="<?php echo $rows['image'];?>"/>
</div>
<div id="dv12"class="dv1"></div>

<center>
<div id="dv2">
<a href="www.DQ.php?Number=1"><button id="0">1</button>
<a href="www.DQ.php?Number=2"><button id="1">2</button>
<a href="www.DQ.php?Number=3"><button id="2">3</button>
<a href="www.DQ.php?Number=4"><button id="3">4</button>
<a href="www.DQ.php?Number=5"><button id="4">5</button>
<a href="www.DQ.php?Number=6"><button id="5">6</button>
<a href="www.DQ.php?Number=7"><button id="6">7</button>
<a href="www.DQ.php?Number=8"><button id="7">8</button>
<a href="www.DQ.php?Number=9"><button id="8">9</button>
<a href="www.DQ.php?Number=10"><button id="9">10</button>
<a href="www.DQ.php?Number=11"><button id="10">11</button>
<a href="www.DQ.php?Number=12"><button id="11">12</button>
<a href="www.DQ.php?Number=13"><button id="12">13</button>
<a href="www.DQ.php?Number=14"><button id="13">14</button>
<a href="www.DQ.php?Number=15"><button id="14">15</button>
<a href="www.DQ.php?Number=16"><button id="15">16</button>
<a href="www.DQ.php?Number=17"><button id="16">17</button>
<a href="www.DQ.php?Number=18"><button id="17">18</button>
<a href="www.DQ.php?Number=19"><button id="18">19</button>
<a href="www.DQ.php?Number=20"><button id="19">20</button>
</div>
</center>

<div id="dv3">
<h2>Legend</h2>
<center>
<button class="btn"id="btn1"></button>Answered
<button class="btn"id="btn2"></button>Not Answered<br>
<button class="btn"id="btn3"></button>Marked
<button class="btn"id="btn4"></button>Not Visited
</center>
</div>

</div>
<form method="POST" action="">
<div id="IInd">
		<div class="gd">
		<p id="qs"><b>Question </b>
		<?php  echo $row[0].": " .$row[1];?></p>
	
		<p class="op"><input  id="optn1"value="1"name="rd"type="radio"><?php  echo $row[2]; ?></p>
		<p class="op"><input  id="optn2"value="2"name="rd"type="radio"><?php  echo $row[3]; ?></p>
		<p class="op"><input  id="optn3"value="3"name="rd"type="radio"><?php  echo $row[4]; ?></p>
		<p class="op"><input  id="optn4"value="4"name="rd"type="radio"><?php  echo $row[5]; ?></p>
		</div>
</div>
<div id="IIIrd">
<center>

<button type="reset"id="clear"class="bt">CLEAR RESPONCE</button>


<button type="submit"id="next"class="bt" name="Save"value="Save">Save Responce</button>

<input type="submit" id="sbmt"class="bt" name="submit"value="SUBMIT"></input>
</center>
</div>

</form>
<script type="text/javascript">


setInterval(function()
{
var Future= new Date("May 13 ,2019 16:35:00").getTime();
var now=new Date().getTime();
result=Future-now;

var day= Math.floor(result/(1000*60*60*24));
var hrs= Math.floor((result%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result%(1000*60*60))/(1000*60));
var sec= Math.floor((result%(1000*60))/(1000));

if(result>0)
{
	document.getElementById("dv12").innerHTML = '<?php echo $rows['username'];?>' +'<br>'+'<br>'+"Time Left :"+"  "+day + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}

	if(result<=0||(hrs==0 && min==0 && sec==0))
	{
			document.getElementById("dv12").innerHTML ='<?php echo $rows['username'];?>' +'<br>'+'<br>'+ "Time is Over";
			window.location.href="Result.php";
	}
	
},1000); 


</script>
<?php
if(isset($_POST['submit']))
{
	echo '<script type="text/javascript"> 
	var r=confirm("Are you want to submit") ;
	if(r==true)
	{
		window.location.href="Result.php"
	}
	</script>';

}

?>
</body>
</html>
