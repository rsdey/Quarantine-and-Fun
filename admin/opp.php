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


<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exlore</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">

      <link href="../blog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <link href="../blog/css/clean-blog.min.css" rel="stylesheet">




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
        <a class="nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="collpoll.php">Collpoll</a>
          <a class="dropdown-item" href="notes.php">Notes</a>
          <a class="dropdown-item" href="recording.php">Recorded Lectures</a>
          <a class="dropdown-item" href="timetable.php">Lecture schedule</a>
  
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="members.php">Members</a>
          <a class="dropdown-item" href="viewadmin.php">Admins</a>
          <a class="dropdown-item" href="viewsf.php">Suggestion and Feedback</a>
          <a class="dropdown-item" href="viewbugs.php">Bugs</a>
        
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #45b6fe">Hello <?php echo $_SESSION['username']; ?> </a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="info.php">View account</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
          
        </div>
      </li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light " >
    <div class="container">
      <a class="navbar-brand" >Categories</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="internships.php">Internships</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nonac.php">Non - Academic</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../images/bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Explore More</h1>
            <span class="subheading">Learn more :)</span>
          </div>
        </div>
      </div>
    </div>
  </header>
   
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="post-title">
              Highlights:
            </h2>
            <hr>
        <div class="post-preview">
          <a href="https://www.yuvajobs.com/jobs-vacancy-technology-intern-ai-ml-axs-solutions-and-consulting-private-limited-7872792.html" target="blank">
            <h2 class="post-title">
             Technology Intern Ai/ Ml 
            </h2>
            <h3 class="post-subtitle">
              Axs Solutions And Consulting Private Limited
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="https://www.yuvajobs.com/" target="blank">Yuva jobs</a>
            Last date December 31, 2020</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="https://neev.dotquestionmark.com/" target="blank">
            <h2 class="post-title">
              Neev - 6 domains in 2 months
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="https://dotquestionmark.com/" target="blank">DotQuestionmark</a>
            Last date November 31, 2020</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="https://www.theforage.com/" target="blank">
            <h2 class="post-title">
              Free virtul internship programs
            </h2>
            <h3 class="post-subtitle">
             Showcase your skills. Find your career fit
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="https://scholarshipscorner.website/free-online-internships-with-certificates/" target="blank">Scholarships corner</a>
            </p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="https://alison.com/course/introduction-to-c-programming" target="blank">
            <h2 class="post-title">
              Brush up the basics
            </h2>
            <h3 class="post-subtitle">
              Revise C/C++ before the mains
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="https://alison.com/course/" target="blank">Alison.com</a>
           </p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          
        </div>
      </div>
    </div>
  </div>

  <hr>
<br><br><br><br>
</main>

<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
