<html>
<head>
<style>
#Nav1
{
margin-top:30px;

}

ul 
{
list-style-type:none;
background-color:pink;
margin :0px;
}

ul::after
{
content : " ";
display : block;
clear: left;
}

li
{
float : left;
}

a:hover
{
color :blue;
font-size:25px;
}

a
{
text-decoration:none;
font-size: 25px;
display:inline-block;
height:45px;
padding-right:60px;
line-height:60px;
color:black;
}

p
{
color:blue;
font-size:30px;
}


</style>
</head>
<body>
<p><marquee>Please select branch</marquee></p>

<div id="Nav1">
<ul id="ul1">
<li><a href="#">Home</a></li>
<li><a href="#">Computer science</a></li>
<li><a href="#">Electronics and communication</a></li>
<li><a href="#">Mechanical</a></li>
<li><a href="#">Civil</a></li>
<li><a href="#">Electrical</a></li>
<ul>
</div>

</body>
</html>