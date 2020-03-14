<!DOCTYPE html>
<html>
<head>
  <title>Layout Master</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
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
    <a href=""class="btn btn-outline-dark"id="a4">Profile</a>
    <a href=""class="btn btn-outline-dark"id="a5">Log out</a> 
  </div>
  <nav class="zone  sticky" id="nav-bar" hidden>
      <ul class="main-nav">
          <li><a href="" id="navitem">Home</a></li>
          <li><a href=""id="navitem">Results list</a></li>
          <li><a href=""id="navitem">Quiz Exams</a></li>
          <li class="push"><a href="" id="navitem">Log Out</a></li>
     </ul>
  </nav>

<div class="container"><img class="cover" src="iiit.jpg"></div>


<div class="zone blue grid-wrapper" style="background:url('bg-01.jpg');border:none; background-size: cover; ">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="result.png" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title" >First Year Quiz Result</h5>
        <p class="card-text">Click on the button below for exploring First year quiz result and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="result.png" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Second Year Quiz Result</h5>
        <p class="card-text">Click on the button below for exploring Second year quiz result and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>
    

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="result.png" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Third Year Quiz Result</h5>
        <p class="card-text">Click on the button below for exploring Third year Quiz Result and more.</p>
        <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="result.png" alt="Card image cap">
          <div class="card-body"style="color: black">
            <h5 class="card-title">Fourth Year Quiz Result </h5>
            <p class="card-text">Click on the button below for exploring Fourth year Quiz Result and more.</p>
            <a href="#" class="btn btn-primary" style="width: 180px; height: 40px;">Proceed</a>
          </div>
        </div>
    

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="result.png" alt="Card image cap">
      <div class="card-body"style="color: black">
        <h5 class="card-title">Mtech Quiz Result </h5>
        <p class="card-text">Click on the button below for exploring Mtech Quiz Result and more.</p>
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