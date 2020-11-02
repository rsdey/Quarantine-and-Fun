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

<!doctype html>
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
    <link href="../blog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../blog/css/clean-blog.min.css" rel="stylesheet">



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="templates/album/album.css" rel="stylesheet">

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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">To Do</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="games.php">Games</a>
          <a class="dropdown-item" href="vc.php">Video calls</a>
          <a class="dropdown-item" href="exercise.php">Exercise</a>
          <a class="dropdown-item" href="courses.php">Courses</a>
          <a class="dropdown-item" href="internships.php">Internships</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="covid.php">Covid-19 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown ">
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
          <li class="nav-item ">
            <a class="nav-link" href="internships.php">Internships</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="nonac.php">Non - Academic</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<header class="masthead" style="background-image: url('../images/nonac.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Learn </h1>
            <span class="subheading">what you love :)</span>
          </div>
        </div>
      </div>
    </div>
  </header>



  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="post-title">
              Persue you instincts:
            </h2>
            <hr></div></div></div>

  <main role="main">

  
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/design.png" height="225">
            <div class="card-body">
              <p>Digital Art</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://digitaldefynd.com/best-graphic-design-course-program-classes-tutorial/" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/phoyo.jpg" height="225">
            <div class="card-body">
              <p>Photography</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.vogue.in/culture-and-living/content/best-free-online-photography-courses-that-are-perfect-for-all-levels-of-enthusiasts" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/guitar.jpg" height="225">
            <div class="card-body">
            <p>Guitar</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.theguitarlesson.com/best-online-guitar-lessons/" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
            
              </div>
            </div>
          </div>
        </div>

        

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/dance.jpg" height="225">
            <div class="card-body">
              <p>Dance</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.nerdynaut.com/top-youtube-channels-to-learn-dancing-like-a-pro#:~:text=%20Top%20YouTube%20Channels%20to%20Learn%20Dancing%20like,teach%20the%20world%20to%20dance%20and...%20More%20" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/music.jpg" height="225">
            <div class="card-body">
              <p>Music</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://techboomers.com/best-youtube-channels-to-teach-music#:~:text=%20Best%20YouTube%20channels%20for%20learning%20how%20to,from%20absolute%20beginner%20level%20to%20advanced...%20More%20"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <title>Placeholder</title><img src="images/yoga.jpg" height="225">
            <div class="card-body">
              <p>Yoga and fitness</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="https://www.elitedaily.com/p/10-yoga-youtube-channels-thatll-take-your-practice-to-the-next-level-8681031#:~:text=10%20Yoga%20YouTube%20Channels%20That%27ll%20Take%20Your%20Practice,and%20more%29%20in%20her%20...%20More%20items...%20" target="blank"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</main>


<br></br>
<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
