<!DOCTYPE html>
<html>
<head>
	<title>login/signup page</title>
</head>
<style type="text/css">
@import 'https://fonts.googleapis.com/css?family=Dosis|Roboto:300,400';
body{
	padding:0%;
	margin:0%;
	background-image:url("https://images.pexels.com/photos/1762851/pexels-photo-1762851.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
	}
	.container{
		position: absolute
		height:auto;
		width: auto;
		top: calc(50% - 240px);
		left: calc(50% - 160px);
		}
	h3{
		
	font-family: 'Dosis';
	font-size: 35px;
	text-transform: uppercase;
	color: #87613d;
	margin-bottom: 30px;

	}
	form {
	position: absolute; 
	text-align: center;
	background: #fff;
	width: 380px;
	height: 670px;
	padding: 30px 20px 0 20px;
	box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.25);
	box-sizing: border-box;
}

input {
	border: none;
	border-bottom: 1px solid #ffc185;
	width: 85%;
	font-family: 'Roboto';
	color: #ff7d00;
	text-align: center;
	font-size: 21px;
	font-weight:100;
	margin-bottom:25px;
}
button{
	position: absolute;
	width: 50%;
	height: 60px;
	bottom: 0;
	border: 0;
	font-family: 'Dosis';
	font-size: 24px;
	text-transform: uppercase;
	cursor: pointer;
	background-color: #ff7d00;
	right:0;

}

#left{
	left: 0;
	border-radius: 0 0 0 5px;
	background-color: rgba(255, 125, 0, 0.35);
	color: #fff;
	transition:all 0.3s linear;
}
#left:hover {
	background-color:rgba(255, 125, 0, 0.65);
	color: #fff;
}
#lleft{
	left: 0;
	border-radius: 0 0 0 5px;
	background-color: rgba(255, 125, 0, 0.35);
	color: #fff;
	transition:all 0.3s linear;
}
#lleft:hover {
	background-color:rgba(255, 125, 0, 0.65);
	color: #fff;
}


#curr{
	margin-bottom: 420px;
	margin-right:90px;
}
#signin input,
#signup .w100 {
	width: 100%;
}

#signin{
		z-index: 2;
		

}

#signup {
	z-index: 1;
	transform: perspective(100px) translate3d(100px, 0px, -30px);
	opacity: 0.5;
}

.active-dx{
	animation-name: foregrounding-dx;
	animation-duration: 0.9s;
	animation-fill-mode: forwards;
}

.active-sx{
	animation-name: foregrounding-sx;
	animation-duration: 0.9s;
	animation-fill-mode: forwards;
}

.inactive-dx{
	animation-name: overshadowing-dx;
	animation-duration: 0.9s;
	animation-fill-mode: forwards;
}

.inactive-sx{
	animation-name: overshadowing-sx;
	animation-duration: 0.9s;
	animation-fill-mode: forwards;
}

#niche{
	margin-top: 150px;
}
@keyframes overshadowing-dx {
	0%{
		z-index:2;
		transform: perspective(100px) translate3d(0px, 0px, 0px);
		opacity: 1;
		box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.25);
	}
	100%{
		z-index: 1;
		transform: perspective(100px) translate3d(100px, 0px, -30px);
		opacity: 0.5;
		box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.25);
	}
}

@keyframes overshadowing-sx {
	0%{
		z-index:2;
		transform: perspective(100px) translate3d(0px, 0px, 0px);
		opacity: 1;
		box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.25);
	}
	100%{
		z-index: 1;
		transform: perspective(100px) translate3d(-100px, 0px, -30px);
		opacity: 0.5;
		box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.25);
	}
}

@keyframes foregrounding-dx {
	0%{
		z-index:1;
		transform: perspective(100px) translate3d(100px, 0px, -30px);
		opacity: 0.5;
	}
	50%{
		z-index:2;
		transform: perspective(100px) translate3d(400px, 0px, -30px);
	}
	100%{
		z-index:2;
		transform: perspective(100px) translate3d(0px, 0px, 0px);
		opacity: 1;
	}
}

@keyframes foregrounding-sx {
	0%{
		z-index:1;
		transform: perspective(100px) translate3d(-100px, 0px, -30px);
		opacity: 0.5;
	}
	50%{
		z-index:2;
		transform: perspective(100px) translate3d(-400px, 0px, -30px);
	}
	100%{
		z-index:2;
		transform: perspective(100px) translate3d(0px, 0px, 0px);
		opacity: 1;
	}
}
</style>
<body>

<div class="container">

	<form id="signin" action="Log.php" method="POST">
			<h3 id="niche">LOG-IN</h3>
			<input type="text" placeholder="Username" name="user" required>
			<br>
			<input type="PASSWORD" placeholder="Password" name="pass" required>
			<br>
			<button type="submit" name="Login">Log-In</button>
			<button id="lleft" type="button" name="Signup">Register</button>

		</form>

	<form id="signup" action="Reg.php" method="POST" enctype="multipart/form-data">
		<h3>Create New Account</h3>
		<input type="email" placeholder="EMAIL" name="email"required>
		<input type="text" placeholder="FULL NAME" name="fullname"required>
		<br>
		<input type="text" placeholder="USERNAME" name="username"required>
		<br>
		<input type="PASSWORD" placeholder="PASSWORD" name="password"required>
		<br>
		<input type="text" placeholder="ROLL NUMBER"name="roll" required>
		<br>
		<select id="big" name="code" required><option>16100</option>
				<option>16101</option>
				<option>17100</option>
				<option>17101</option>
				<option>18100</option>
				<option>18101</option>
		</select>
		<br>
		<br>
		<input type="file"name="imglink" required>
		<button id="left"  type="button"name="Login">Log-in</button>
		<button type="submit" name="Signup">Sign-up</button>
	</form>
		
	
		
</div>
<script type="text/javascript">
document.getElementById("left").addEventListener("click",function(){
			document.getElementById("signin").classList.add("active-dx");
			document.getElementById("signup").classList.add("inactive-sx");
			document.getElementById("signup").classList.remove("active-sx");
			document.getElementById("signin").classList.remove("inactive-dx");
	});

	document.getElementById("lleft").addEventListener("click",function(){
			document.getElementById("signup").classList.add("active-sx");
			document.getElementById("signin").classList.add("inactive-dx");
			document.getElementById("signin").classList.remove("active-dx");
			document.getElementById("signup").classList.remove("inactive-sx");
	});
</script>
</body>
</html>
