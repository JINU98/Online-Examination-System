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
	$row=mysqli_fetch_assoc($result);
}
?>
<html>
<head>
<title>Exams</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Stylish" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<style>

#Lem
{

		/*border:1px black solid;*/
		width:70px;
		height:35px;
		text-align:center;
		font-size:35px;
		position:fixed;
		color:black;
		font-weight:bold;
		/*-webkit-animation: rotation 1s infinite linear;*/
}
		/*@-webkit-keyframes rotation 
		{
			from 
				 {
					-webkit-transform: rotateZ(0deg);
				 }
			to 
				{
					-webkit-transform: rotateZ(360deg);
				}*/
		}
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

#hdr2
{
	font-size:35px;
	color:black;
	margin-top:30px;
	font-family: 'Stylish', sans-serif;
	margin-top: 0px;
}

	
#bdy
{
	float:right;
	width:50%;
	background-color:#F0FFF0;
	height:410px;
	margin-top:28px;
	/*margin-top:-450px;*/
	margin-right:50px;
	overflow:auto;
	font-family: 'Stylish', sans-serif;
}
#pst
{   float:left;
	margin-top:25px;
	width:30%;
	background-color:#F0FFF0;
	height:410px;
	overflow:auto;
	margin-left:50px;
	font-family: 'Stylish', sans-serif;
}

.pp{
	margin-top:5px;
	text-align:center;
	font-size:25px;
	color:blue;
	font-weight:bold;
}
a
{
	text-decoration:none;
	color:blue;
	font-weight:bold;
}
.eta
{
	color:black;
	font-weight:bold;
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
 #new{
 	 font-size: 20px;
 	 padding-left: 200px;
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
Academic Exams
</div>

<div id="pst">
<p style="color:black;text-align:center;font-weight:bold;font-size:25px;margin-left:50px;">PAST PAPERS</P>
<p class="pp" id="DQ1"></p>
<p class="pp"id="CN1"></P>
<p class="pp" id="OS1"></p>
<p class="pp"id="CO1"></P>
<p class="pp" id="SS1"></p>
<p class="pp"id="DSP1"></P>

</div>

<center><p id="Lem"style="padding-left:200px; margin-top:-20px;margin-left:700px;">New</p></center>
<div id="bdy">
<div id="new">
<p class="cng" id="DQ"style="color:red">DBMS Quiz-1</p>
<p class="eta" id="p1">
<p class="cng" id="CN"style="color:red">Computer Network Quiz-1</p>
<p class="eta" id="p2">
<p class="cng" id="OS"style="color:red">Operating System Quiz-1</p>
<p class="eta" id="p3">
<p class="cng" id="CO"style="color:red">Computer Organisation Quiz-1</p>
<p class="eta" id="p4">
<p class="cng" id="SS"style="color:red">Signal and System Quiz-1</p>
<p class="eta" id="p5">
<p class="cng" id="DSP"style="color:red">Digital Signal Processing Quiz-2</p>
<p class="eta" id="p6">
</div>
</div>
<script>
setInterval(function()
{
var date= new Date("May 13 ,2019 16:27:00").getTime();
var Future= new Date("May 13 ,2019 16:31:00").getTime();
var now=new Date().getTime();

result1=date-now;
result2=Future-now;

var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));

if(result1>0)
{
	document.getElementById("p1").innerHTML =" Time left :"+ days + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
<?php
	$query="select * from question_paper_name where id='1'";
    $result = mysqli_query($con,$query);
    $rows=mysqli_fetch_assoc($result);
?>
	if(<?php echo $row['code'];?>==<?php echo $rows['code'];?>)
	
	{
		<?php
		$sql="ALTER TABLE adq ADD $username VARCHAR(255)";
		$result=mysqli_query($con,$sql);	
		?>
		
			var str = "DBMS QUIZ-1";
			var result = str.link("");
			document.getElementById("DQ").innerHTML =result;
		    document.getElementById("p1").innerHTML ="You Can Proceed Now";
			document.getElementById("DQ").addEventListener('click',function basicPopup() {
			popupWindow = window.open('www.DQ.php','popUpWindow','height=1000%,width=2000%,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
);
	}
	
	else
	{
		document.getElementById("p1").innerHTML="You are not eligible for this exam";
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("DQ").style.display="none";
			document.getElementById("p1").style.display="none";
			document.getElementById("DQ1").innerHTML="<a href='DQ.php'>DBMS Quiz-1</a>"
		
	}
	
}
	
},1000); 

setInterval(function()
{
var date= new Date("May 13 ,2019 16:26:30").getTime();
var Future= new Date("May 13 ,2019 16:31:00").getTime();
var now=new Date().getTime();

result1=date-now;
result2=Future-now;

var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));

if(result1>0)
{
document.getElementById("p2").innerHTML =" Time left :"+ days + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
<?php
	$query="select * from question_paper_name where id='2'";
    $result = mysqli_query($con,$query);
    $rows=mysqli_fetch_assoc($result);
?>
	if(<?php echo $row['code'];?>==<?php echo $rows['code'];?>)
	{
		<?php
		$sql="ALTER TABLE acn ADD $username VARCHAR(255)";
			$result=mysqli_query($con,$sql);	
		?>
			var str = "Computer Network Quiz-1";
			var result = str.link("");
			  document.getElementById("CN").innerHTML =result;
			 document.getElementById("p2").innerHTML ="You Can Proceed Now";
			document.getElementById("CN").addEventListener('click',function basicPopup() {
			popupWindow = window.open('www.CN.php','popUpWindow','height=1000%,width=2000%,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
);
	}
	else
	{
		document.getElementById("p2").innerHTML="You are not eligible for this exam";
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("CN").style.display="none";
			document.getElementById("p2").style.display="none";
			document.getElementById("CN1").innerHTML="<a href='CN.php'>Computer Network Quiz-1</a>"
	}
	
}
	
},1000);

setInterval(function()
{
var date= new Date("May 13 ,2019 16:50:00").getTime();
var Future= new Date("May 13 ,2019 16:55:00").getTime();
var now=new Date().getTime();

result1=date-now;
result2=Future-now;

var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));

if(result1>0)
{
document.getElementById("p3").innerHTML =" Time left :"+ days + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
<?php
	$query="select * from question_paper_name where id='3'";
    $result = mysqli_query($con,$query);
    $rows=mysqli_fetch_assoc($result);
?>
	if((<?php echo $row['code'];?>==<?php echo $rows['code'];?>))
	{
			var str = "Operating System Quiz-1";
			var result = str.link("www.OS.php");
			document.getElementById("OS").innerHTML = result;
		    document.getElementById("p3").innerHTML ="You Can Proceed Now";
			document.getElementById("OS").addEventListener('click',function basicPopup() {
			popupWindow = window.open('www.OS.php','popUpWindow','height=1000%,width=2000%,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
);
			
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("OS").style.display="none";
			document.getElementById("p3").style.display="none";
			document.getElementById("OS1").innerHTML="<a href='www.OS.php'>Operating System Quiz-1</a>"
	}
	else
	{
		document.getElementById("p3").innerHTML="You are not eligible for this exam";
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("OS").style.display="none";
			document.getElementById("p3").style.display="none";
			document.getElementById("OS1").innerHTML="<a href='OS.php'>Operating System Quiz-1</a>"
	}
}
	
},1000);

setInterval(function()
{
var date= new Date("May 13 ,2019 17:05:00").getTime();
var Future= new Date("May 13 ,2019 17:15:00").getTime();
var now=new Date().getTime();

result1=date-now;
result2=Future-now;

var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));

if(result1>0)
{
document.getElementById("p4").innerHTML =" Time left :"+ days + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
<?php
	$query="select * from question_paper_name where id='4'";
    $result = mysqli_query($con,$query);
    $rows=mysqli_fetch_assoc($result);
?>
	if(<?php echo $row['code'];?>==<?php echo $rows['code'];?>)
	{
			
			var str = "Computer Organisation Quiz-1";
			var result = str.link("www.CO.php");
			document.getElementById("CO").innerHTML = result;
		    document.getElementById("p4").innerHTML ="You Can Proceed Now";
			document.getElementById("CO").addEventListener('click',function basicPopup() {
			popupWindow = window.open('www.CO.php','popUpWindow','height=1000%,width=2000%,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
);
	}
	
	else
	{
		document.getElementById("p4").innerHTML="You are not eligible for this exam";
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("CO").style.display="none";
			document.getElementById("p4").style.display="none";
			document.getElementById("CO1").innerHTML="<a href='CO.php'>Computer Organisation Quiz-1</a>"
	}
}
	
},1000);

setInterval(function()
{
var date= new Date("May 13 ,2019 17:15:00").getTime();
var Future= new Date("May 13 ,2019 17:25:00").getTime();
var now=new Date().getTime();

result1=date-now;
result2=Future-now;

var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));

if(result1>0)
{
document.getElementById("p5").innerHTML =" Time left :"+ days + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
<?php
	$query="select * from question_paper_name where id='5'";
    $result = mysqli_query($con,$query);
    $rows=mysqli_fetch_assoc($result);
?>
	if(<?php echo $row['code'];?>==<?php echo $rows['code'];?>)
	{
			var str = "Signal and System Quiz-1";
			var result = str.link("www.SS.php");
			document.getElementById("SS").innerHTML = result;
		    document.getElementById("p5").innerHTML ="You Can Proceed Now";
			document.getElementById("SS").addEventListener('click',function basicPopup() {
			popupWindow = window.open('www.SS.php','popUpWindow','height=1000%,width=2000%,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
);
	}
	
	
	else
	{
		document.getElementById("p5").innerHTML="You are not eligible for this exam";
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("SS").style.display="none";
			document.getElementById("p5").style.display="none";
			document.getElementById("SS1").innerHTML="<a href='SS.php'>Signal and System Quiz-1</a>"
	}
}
	
},1000);

setInterval(function()
{
var date= new Date("May 13 ,2019 18:10:00").getTime();
var Future= new Date("May 13 ,2019 18:20:00").getTime();
var now=new Date().getTime();

result1=date-now;
result2=Future-now;

var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));

if(result1>0)
{
document.getElementById("p6").innerHTML =" Time left :"+ days + "d "+ hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
<?php
	$query="select * from question_paper_name where id='6'";
    $result = mysqli_query($con,$query);
    $rows=mysqli_fetch_assoc($result);
?>
	if(<?php echo $row['code'];?>==<?php echo $rows['code'];?>)
	{
			var str = "Digital  Signal Processing Quiz-2";
			var result = str.link("www.DSP.php");
			document.getElementById("DSP").innerHTML = result;
		    document.getElementById("p6").innerHTML ="You Can Proceed Now";
			document.getElementById("DSP").addEventListener('click',function basicPopup() {
			popupWindow = window.open('www.Quiz.php','popUpWindow','height=1000%,width=2000%,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
);
	}
	
	else
	{
		document.getElementById("p6").innerHTML="You are not eligible for this exam";
	}
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("DSP").style.display="none";
			document.getElementById("p6").style.display="none";
			document.getElementById("DSP1").innerHTML="<a href='DSP.php'>Digital  Signal Processing Quiz-2</a>"
	}
}
	
},1000);
</script>
</body>
</html>