<?php 

session_start();

if(!isset($_SESSION['username']))
{

?>
        <script>alert('Please Login Again');
        location.replace("../index.php");
        </script>
        
        <?php

      }

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Quarantine & Fun</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body style="overflow-x: auto;">



<main role="main">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php"><img src="images/logo.png" style="width: 55px; height: 55px"></img> &nbsp; Quarantine and fun</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">To Do</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="games.php">Games</a>
          <a class="dropdown-item" href="vc.php">Video calls</a>
          <a class="dropdown-item" href="#">Exercise</a>
          <a class="dropdown-item" href="#">Courses</a>
          <a class="dropdown-item" href="#">Internships</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="covid.php">Covid-19 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="collpoll.php">Collpoll</a>
          <a class="dropdown-item" href="notes.php">Notes</a>
          <a class="dropdown-item" href="recording.php">Recorded Lectures</a>
          <a class="dropdown-item" href="timetable.php">Lecture schedule</a>
          <a class="dropdown-item" href="#">e-Library</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="members.php">Members</a>
          <a class="dropdown-item" href="sf.php">Suggestion and Feedback</a>
          <a class="dropdown-item" href="bugs.php">Report Bugs</a>
        
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="#">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </form>
  </div>
</nav>



<section class="jumbotron text-center">
    <div class="container">
      <h1>Single Player JS Games</h1>
      </div>
  </section>


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

<div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g3.png" height="225">
            
            <div class="card-body">
              <p class="card-text">The solution for any choice to be made.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="games/rock-paper-scissors/rock-paper-scissors.html" role="button" target="_blank">Play</a></p>
                </div>
                
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g1.png" height="225">
            
            <div class="card-body">
              <p class="card-text">The classical tic tac toe game.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="games/tic-tac-toe/tic-tac-toe-ai.html" role="button" target="_blank">Play</a></p>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g2.jpg" height="225">
           
            <div class="card-body" >
              <p class="card-text">The old class whack a mole game.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="games/whack-a-mole/whack-a-mole.html" role="button" target="_blank">Play</a></p>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        

        
    </div>
  </div>
<section class="jumbotron text-center">
    <div class="container">
      <h1>Multi-Player Online Gaming-platforms </h1>
      </div>
  </section>
<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

<div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g4.png" height="225">
            
            <div class="card-body">
              <p class="card-text">All nostalgic retro games combined. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://www.retrogames.cz/" role="button" target="_blank">Play</a></p>
                </div>
                
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g5.jpg" height="225">
            
            <div class="card-body">
              <p class="card-text">The games we all were in love with.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://www.miniclip.com/games/en/" role="button" target="_blank">Play</a></p>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g6.jpg" height="225">
           
            <div class="card-body" >
              <p class="card-text">Arcade lovers, we got you.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://www.agame.com/games" role="button" target="_blank">Play</a></p>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>



</main>
<section class="jumbotron text-center">
    <div class="container">
      <h1>Multi-Player Online Android Games</h1>
      <p>Getting bored in your lecture ? Play a game with your friends :)</p>
      </div>
  </section>
<center>
  <div class="col-md-4">
          <div class="card mb-4 shadow-sm"><img src="images/g0.png" height="225">
           
            <div class="card-body" >
              <p class="card-text">Your space to hang out, find fun & new friends</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://play.google.com/store/apps/details?id=com.plato.android" role="button" target="_blank">Play</a></p>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
  </center><br><br>
<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact No. 7020098126</span>
      </div>
    </footer>

 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
