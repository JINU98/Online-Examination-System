
<html>
<head>
<title>Timer</title>
<style>
.test
{
	float:left;
}
#Lem
{

		border:1px black solid;
		width:2.5%;
		text-align:center;
		background-color:yellow;
		color:red;
		font-weight:bold;
		-webkit-animation: rotation 1s infinite linear;
}
		@-webkit-keyframes rotation 
		{
			from 
				 {
					-webkit-transform: rotateZ(0deg);
				 }
			to 
				{
					-webkit-transform: rotateZ(360deg);
				}
		}

</style>
</head>
<body>
<p class="test"id="lemo">DBMS_QUIZ</p>
<p class="test"id="Lem">New</p><br><br>
<p id="demo"></p>
<script type="text/javascript">

//alert("Ayush batwada you are great man");
setInterval(function()
{
var date= new Date("April 29 ,2019 16:15:00").getTime();
var Future= new Date("April 29 ,2019 17:00:00").getTime();
var now=new Date().getTime();
//document.write(date);
//document.write("<br>");
//document.write(now,"<br>");
result1=date-now;
result2=Future-now;
//document.write(result,"<br>");
var day= Math.floor(result1/(1000*60*60*24));
var hrs= Math.floor((result1%(1000*60*60*24))/(1000*60*60));
var min= Math.floor((result1%(1000*60*60))/(1000*60));
var sec= Math.floor((result1%(1000*60))/(1000));

var days= Math.floor(result2/(1000*60*60*24));
var hrss= Math.floor((result2%(1000*60*60*24))/(1000*60*60));
var mins= Math.floor((result2%(1000*60*60))/(1000*60));
var secs= Math.floor((result2%(1000*60))/(1000));
/*
document.write(day,"<br>");
document.write(hrs,"<br>");
document.write(min,"<br>");
document.write(sec);
*/
if(result1>0)
{
	document.getElementById("demo").innerHTML = "Time Left"+"  "+/*days + "d "+ */hrs + "h "
  + min + "m " + sec + "s ";
}
if(hrs==0 && min==0 && sec==0 ||result1<0)
{ 
	if(result2<=0||(hrss==0 && mins==0 && secs==0))
	{
			document.getElementById("lemo").innerHTML="DBMS_QUIZ";
			document.getElementById("demo").innerHTML = "Time is Over<br>THANK YOU";
			document.getElementById("Lem").style.display="none";
	}
	else
	{
			var str = "DBMS_QUIZ";
			var result = str.link("www.Quiz.php");
			document.getElementById("lemo").innerHTML=result;
		    document.getElementById("demo").innerHTML = "You Can Proceed Now<br>BEST OF LUCK";
	}
}
	
},1000); 
</script>
</body>
</html>