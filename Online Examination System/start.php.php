<?php
session_start();
include 'connect.php';
$_SESSION['var']=0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Layout Master</title>
  <link rel="stylesheet" type="text/css" href="./style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
</head>
<body>
  <script type="text/javascript">
    
  
        window.onscroll = function() {Function()};

            function Function() {
              if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
                document.getElementById("nav-bar").hidden=false;
              } else{
                document.getElementById("nav-bar").hidden=true;
              }
            }


  </script>
  <div id="jinu" >
     <img src="bg-01.png" style="width: 100px; height:100px;">
    <a href="Register.php"class="btn btn-outline-dark"id="a4">Register/Login</a>
  </div>
  <nav class="zone  sticky" id="nav-bar" hidden>
      <ul class="main-nav">
          <li><a href="" id="navitem">Home</a></li>
          <li><a href=""id="navitem">Study Materials</a></li>
          <li><a href="Register.php"id="navitem">Quiz Exams</a></li>
          <li class="push"><a href="Register.php" id="navitem">Register/Login</a></li>
     </ul>
  </nav>

<div class="container"><img class="cover" src="iiit.jpg"></div>


<div class="zone blue grid-wrapper" style="background:url('bg-01.jpg');border:none; background-size: cover; ">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="Syllabus.jpg" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title" >First Year Course</h5>
        <p class="card-text">Click on the button below for exploring First year courses and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="Syllabus.jpg" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Second Year Course</h5>
        <p class="card-text">Click on the button below for exploring Second year courses and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>
    

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="Syllabus.jpg" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Third Year Course</h5>
        <p class="card-text">Click on the button below for exploring Third year courses and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="Syllabus.jpg" alt="Card image cap">
          <div class="card-body"style="color: black">
            <h5 class="card-title">Fourth Year Course</h5>
            <p class="card-text">Click on the button below for exploring Fourth year courses and more.</p>
            <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
          </div>
        </div>
    

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="Syllabus.jpg" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Mtech Course</h5>
        <p class="card-text">Click on the button below for exploring Mtech courses and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>
   
   <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="todo.jpeg" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Assignments</h5>
        <p class="card-text">Click on the button below for recent Assignments.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>
</div>

<footer class="zone " style="background-color: white; height: 200px;  color: black;">
    <br><br> © Copyright All Rights Reserved 
  <p>
    Made By: Aishwarya <span id="span"> Maurya     Aayush</span> <span id="span">Batwada     Jinendra</span> Malekar

  </p></footer>

</body>
</html>