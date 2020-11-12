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
    <title>About Us</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbars/">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />


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
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="members.php">Members</a>
          <a class="dropdown-item" href="viewadmin.php">Admins</a>
          <a class="dropdown-item" href="viewsf.php">Suggestion and Feedback</a>
          <a class="dropdown-item" href="viewbugs.php">Bugs</a>
        
        </div>
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <ul class="navbar-nav">
       <li class="nav-item dropdown" >
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
</main><center><article id="main"><br>
            <header>
              <h2>About Us</h2>
              
            </header>
            <section class="wrapper style5">
              <div class="inner">

                </center>

          
              <div class="container">
                <div class="row text-center">

                    <!-- Team item -->
                    <div class="col-xl-3 col-sm-6 mb-5">
                       <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/rd.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                           <h5 class="mb-0">Ranadeep</br>Dey</h5>
                           <ul class="social mb-0 list-inline mt-3">
                               <li class="list-inline-item"><a href="https://www.linkedin.com/in/ranadeep-dey-41726415b" class="social-link" target="blank"><i class="fa fa-linkedin" aria-hidden="true" ></i></a></li>
                               <li class="list-inline-item"><a href="mailto:ranadeepdey01@gmail.com" target="blank" class="social-link"><i class="fa fa-envelope"></i></a></li>
                               <li class="list-inline-item"><a href="https://instagram.com/rd.__ae?igshid=1p8hv0hiv7xc4" class="social-link" target="blank"><i class="fa fa-instagram"></i></a></li>
                              
                           </ul>
                       </div>
                   </div><!-- End -->

                    <!-- Team item -->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/amit.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Amit</br> Kumar</h5>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/iamitbhardwaj7" class="social-link" target="blank"><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:iamitbhardwaj7@gmail.com" class="social-link"><i class="fa fa-envelope"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/_mr.ambivert_/" class="social-link" target="blank"><i class="fa fa-instagram"></i></a></li>
                                
                            </ul>
                        </div>
                    </div><!-- End -->

                    <!-- Team item -->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/ay.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Ayush</br></h>Chaudhary</h5>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/ayushchy" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:aachoudhary@mitaoe.ac.in" class="social-link"><i class="fa fa-envelope"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                              
                            </ul>
                        </div>
                    </div><!-- End -->

                    <!-- Team item -->
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/trish.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Trisharan</br> Wahane</h5>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="mailto:trisharan47@gmail.com" class="social-link"><i class="fa fa-envelope"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div><section><center><h4>We Started this platform in order to create a community we all are missing in this lockdown. Everything according to us is made available to you. Hope you have a great time here.<br> Keep exploring  keep learning :) </h4></center></section>
            </div>


                <hr />


<footer class="footer" style="background-color: #878c94; color: white">
      <div class="container">
        <span  style="color: white">Contact Us on <a href="mailto: funqandf@gmail.com" style="color: white">mail@ </a>funqandf@gmail.com</span>
      </div>
    </footer>
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="templates/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
