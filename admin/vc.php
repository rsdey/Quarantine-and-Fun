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
    <title>VC</title>
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
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="members.php">Members</a>
          <a class="dropdown-item" href="viewadmin.php">Admins</a>
          <a class="dropdown-item" href="viewsf.php">Suggestion and Feedback</a>
          <a class="dropdown-item" href="viewbugs.php">Bugs</a>

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
 <body>


<main role="main">

  

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<section class="jumbotron text-center">
    <div class="container">
      <h1>Indian Platforms</h1>
      </div>
  </section>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    


    <!-- START THE FEATURETTES -->



    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">The best Indian video conferencing tool.<span class="text-muted">With the same trust.</span></h2>
        <p class="lead"><ul><li>Hosted in India and offer 24x7 local support. </li><li>Host and manage live interactive events, town halls and webcasts for up to 50,000 attendees. </li><li>Access to real-time meeting analytics and live meeting controls.  </li><li>Convenient dial-in options from Airtel.</li></ul></p><div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://www.airtel.in/business/b2b/bluejeans" role="button" target="_blank">Try now</a></p>
                </div>
      </div>
      <div class="col-md-5">
        <title>Placeholder</title><img src="images/airtel.jpg" height="400" width="400">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">An Indian <span class="text-muted"> Zoom alternative.</span></h2>
       <p class="lead"><ul><li> Built, hosted, and managed in India. </li><li>In-built white board feature.</li><li> Easy-to-use, browser-and-device-agnostic service secured with encryption.</li><li>enables the host to lock a meeting, view and drop/disconnect participants. </li></ul></p><div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://www.enablex.io/ucaas/" role="button" target="_blank">Try now</a></p>
                </div>
      </div>
      <div class="col-md-5">
        <title>Placeholder</title><img src="images/enablex.jpg" height="400" width="400">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Simplest of all,  <span class="text-muted">yet powerfull</span></h2>
        <p class="lead"><ul><li>No login required.</li><li>Secure & private </li><li> ISO certified Indian servers</li><li>Very stable and easy to use. </li></ul></p><div class="btn-group">
                  <p><a class="btn btn-lg btn-primary" href="https://www.saynamaste.in/" role="button" target="_blank">Try now</a></p>
                </div>
      </div>
      <div class="col-md-5">
        <title>Placeholder</title><img src="images/namaste.png" height="400" width="400">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <section class="jumbotron text-center">
    <div class="container">
      <h1>Common  Platforms</h1>
      </div>
  </section>



    <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Global</strong>
        <p class="mb-auto">Auto captions, much stable than other platforms, simple UI</p>
          <a href="https://meet.google.com/" class="stretched-link" target="_blank">Schedule a meet</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><img src="images/meet.jpg" height="200"></svg>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Chinese</strong>
        
          <p class="mb-auto">Stable, room facility, virtual backgrounds and other added features.</p>
          <a href="https://zoom.us/meetings" class="stretched-link">Schedule a meet</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><img src="images/zoom.jpg" height="150" width="170"></svg>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Global</strong>
        <p class="mb-auto">All Microsoft tools integrated, teams functionality, very stable.</p>
          <a href="https://teams.microsoft.com/edustart" class="stretched-link" target="_blank">Schedule a meet</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><img src="images/ms.jpg" height="200"></svg>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Global</strong>
        
          <p class="mb-auto">Award-winning, reliable video, Industry-leading security.</p>
          <a href="https://www.cisco.com/c/en/us/products/conferencing/webex.html?carousel=3" class="stretched-link">Schedule a meet</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><img src="images/cisco.jpg" height="150" width="170"></svg>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
