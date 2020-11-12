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
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Notes</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">



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

    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>


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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">To Do</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="games.php">Games</a>
          <a class="dropdown-item" href="article.php">Articles</a>
          <a class="dropdown-item" href="vc.php">Video calls</a>
          <a class="dropdown-item" href="exercise.php">Exercise</a>
          <a class="dropdown-item" href="courses.php">Courses</a>
          <a class="dropdown-item" href="internships.php">Internships</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="covid.php">Covid-19 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="collpoll.php">Collpoll</a>
          <a class="dropdown-item" href="notes.php">Notes</a>
          <a class="dropdown-item" href="recording.php">Recorded Lectures</a>
          <a class="dropdown-item" href="timetable.php">Lecture schedule</a>
        
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
      <ul class="navbar-nav">
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #45b6fe">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="info.php">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </ul>
    </form>
  </div>
</nav><center>

<h2 class="h1 mb-2 font-weight-normal">Computer Organization and Architecture: </h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=1YyRPGyb3KqsPUOTI_V5LQ9aQ92K0UcCf#list" width="800" height="260" frameborder="0"></iframe>

<h2 class="h1 mb-2 font-weight-normal">Theory Of Computation: </h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=12oI_zKiDtbnbzpTviS6sUTJtIPntQegJ" width="800" height="450" frameborder="0"></iframe>

<h2 class="h1 mb-2 font-weight-normal">Operating System: </h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=1yRIfK1b30JNJ4CV7yJoS55T8yZ0kMmsY" width="800" height="850" frameborder="0"></iframe>

<h2 class="h1 mb-2 font-weight-normal">Project Management: </h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=1W9K0D39BAMM4pS8WCBKt7IS4Olg-iVMC" width="800" height="800" frameborder="0"></iframe>

<h2 class="h1 mb-2 font-weight-normal">Web Technology: </h2>
<iframe src="https://drive.google.com/embeddedfolderview?id=1Mem8FOMgfIZ108VZMx96sCSiGcRfKRNI" width="800" height="800" frameborder="0"></iframe>
 </center>
<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
